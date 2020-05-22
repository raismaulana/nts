<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Export extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->auth_model->security();
        $this->load->model('kegiatan_model');
        $this->load->model('pengguna_model');
        $this->load->model('kasi_model');
        $this->load->model('kabid_model');
    }

    public function index($id_laporan) {
        $this->log_model->write($this->session->userdata('id'), "mengakses ekport excel Laporan id = $id_laporan");

        //mengambil data laporan berdasarkan id_laporan
        $laporan = $this->db->get_where('laporan', ['id_laporan' => $id_laporan])->row();

        //security agar hanya pemilik laporan yang bisa melakukan function ini
        if(!($this->session->userdata('id') == $laporan->id_pengguna)){
            if($this->session->userdata('level') != '4'){ //selain admin (level = 4) tidak bisa mengakses
                die('401 Unauthorized');
            }
        } 
        
        //jika laporan tidak berstatus diterima (status == 1) maka function berhenti
        if($laporan->status_laporan != 1){
            die('Laporan belum disetujui');
        }

        //mengambil data berdasarkan id_laporan dan status kegiatan diterima (kode= 1)
        $activities = $this->kegiatan_model->get_where_array([
            'id_laporan' => $id_laporan,
            'status_kegiatan' => '1'
            ])->result();

        //mengambil data  pengguna-staf berdasarkan laporan.id_pengguna
        $pengguna = $this->pengguna_model->select_where_join_staf('pengguna.id_pengguna', $laporan->id_pengguna)->row();

        //mengambil data kasi-seksi
        $kasi = $this->kasi_model->select_join_seksi_pengguna_where_idseksi($pengguna->id_seksi);

        //mengambil data kabid-bidang
        $kabid = $this->kabid_model->select_join_bidang_pengguna_where_idbidang($kasi[0]->id_bidang);
        
        //membuat object spreadsheet (excel)
        $spreadsheet = new Spreadsheet;
        //spreadsheet->getActiveSheet() agar lebih pendek (khusus write data saja biar rapi)
        $sheet = $spreadsheet->getActiveSheet();

        //pengaturan untuk PAGE saat diprint
        //orientation
        $spreadsheet->getActiveSheet()->getPageSetup()->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_PORTRAIT);
        //paper size
        $spreadsheet->getActiveSheet()->getPageSetup()->setPaperSize(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::PAPERSIZE_A4);
        //horizontal centered
        $spreadsheet->getActiveSheet()->getPageSetup()->setHorizontalCentered(true);
        
        //pengaturan font
        $spreadsheet->getDefaultStyle()->getFont()->setName('Times New Roman');
        $spreadsheet->getDefaultStyle()->getFont()->setSize(12);

        //style Judul Dokumen
        $styleJudulDokumen = [
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP,
            ],
            'font' => [
                'size' => 14,
                'bold' => true,
            ],
        ];
        $spreadsheet->getActiveSheet()->getStyle("A1")->applyFromArray($styleJudulDokumen);
        $spreadsheet->getActiveSheet()->getStyle('A1')->getAlignment()->setWrapText(true);
        $spreadsheet->getActiveSheet()->getRowDimension(1)->setRowHeight(37.50);

        //Judul Dokumen (SKH)
        $judul = "Laporan Kegiatan Harian Seksi ".$kasi[0]->nama_seksi."\nBidang ".$kabid[0]->nama_bidang;
        $sheet->setCellValue('A1', $judul);
        $spreadsheet->getActiveSheet()->mergeCells('A1:E1');
        
        
        //write header tabel
        $sheet->setCellValue('A4', 'No')
            ->setCellValue('B4', 'Tanggal')
            ->setCellValue('C4', 'Aktivitas')
            ->setCellValue('D4', 'Kuantitas Output')
            ->setCellValue('E4', 'Waktu');

        //write content tabel
        $row = 5;
        $no = 1;
        foreach($activities as $activity) {
            $sheet->setCellValue("A$row", $no)
                ->setCellValue("B$row", $activity->tanggal_kegiatan)
                ->setCellValue("C$row", $activity->aktivitas_kegiatan)
                ->setCellValue("D$row", $activity->kuantitas_output_kegiatan)
                ->setCellValue("E$row", $activity->waktu_kegiatan);
            $row++;
            $no++;
        }

        //style tabel
        $row = $row-1;
        //all
        $styleTabelAll = [
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_TOP,
                'wrapText' => true,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ];
        $spreadsheet->getActiveSheet()->getStyle("A4:E$row")->applyFromArray($styleTabelAll);

        //header
        $styleTabelHeader = [
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                'wrapText' => true,
            ],
            'font' => [
                'bold' => true,
            ],
        ];
        $spreadsheet->getActiveSheet()->getStyle("A4:E4")->applyFromArray($styleTabelHeader);
        $spreadsheet->getActiveSheet()->getRowDimension(4)->setRowHeight(21.75);
        //end style tabel

        //tanda tangan
        $rowTanggal = $row+2;
        $rowStafKasi = $rowTanggal+1;
        $rowNamaStafKasi = $rowStafKasi+4;
        $rowNipStafKasi = $rowNamaStafKasi+1;
        $rowKabid = $rowNipStafKasi+2;
        $rowNamaKabid = $rowKabid+4;
        $rowNipKabid = $rowNamaKabid+1;
        //tanggal
        
        $sheet->setCellValue("D$rowTanggal", 'Sidoarjo, '.date('d-m-Y'));
        //staf
        $sheet->setCellValue("D$rowStafKasi", "$pengguna->nama_jabatan");
        $sheet->setCellValue("D$rowNamaStafKasi", "$pengguna->nama_pengguna");
        if (!empty($pengguna->nip_pengguna)){
            $sheet->setCellValue("D$rowNipStafKasi", "NIP. $pengguna->nip_pengguna");
        }
        //kasi
        $sheet->setCellValue("B$rowStafKasi", 'Kepala Seksi '.$kasi[0]->nama_seksi);
        $sheet->setCellValue("B$rowNamaStafKasi", $kasi[0]->nama_pengguna); 
        if (!empty($kasi[0]->nip_pengguna)){
            $sheet->setCellValue("B$rowNipStafKasi", "NIP. ".$kasi[0]->nip_pengguna);
        }
        //kabid
        //merge cell kabid
        $spreadsheet->getActiveSheet()->mergeCells("A".$rowKabid.":E".$rowKabid);
        $spreadsheet->getActiveSheet()->mergeCells("A$rowNamaKabid:E$rowNamaKabid");
        $spreadsheet->getActiveSheet()->mergeCells("A$rowNipKabid:E$rowNipKabid");
        //isi cell
        $sheet->setCellValue("A$rowKabid", "Kepala Bidang ".$kabid[0]->nama_bidang);
        $sheet->setCellValue("A$rowNamaKabid", $kabid[0]->nama_pengguna);
        if (!empty($kabid[0]->nip_pengguna)){
            $sheet->setCellValue("A$rowNipKabid", "NIP". $kabid[0]->nip_pengguna);
        }
        $spreadsheet->getActiveSheet()->getStyle("A$rowKabid:E$rowNipKabid")->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);


        //atur size lebar cell
        // $spreadsheet->getActiveSheet()->getColumnDimension("A")->setAutoSize(true);
        // $spreadsheet->getActiveSheet()->getColumnDimension("B")->setAutoSize(true);
        // $spreadsheet->getActiveSheet()->getColumnDimension("C")->setAutoSize(true);
        // $spreadsheet->getActiveSheet()->getColumnDimension("D")->setAutoSize(true);
        // $spreadsheet->getActiveSheet()->getColumnDimension("E")->setAutoSize(true);
        $spreadsheet->getActiveSheet()->getColumnDimension("A")->setWidth(3.25);
        $spreadsheet->getActiveSheet()->getColumnDimension("B")->setWidth(10.38);
        $spreadsheet->getActiveSheet()->getColumnDimension("C")->setWidth(34.00);
        $spreadsheet->getActiveSheet()->getColumnDimension("D")->setWidth(18.00);
        $spreadsheet->getActiveSheet()->getColumnDimension("E")->setWidth(15.00);

        //membuat nama file
        $filename = $id_laporan."Laporan Kegiatan $laporan->bulan_laporan $laporan->tahun_laporan";

        //export ke xlsx
        $writer = new Xlsx($spreadsheet);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="'.$filename.'.xlsx"');
        header('Cache-Control: max-age=0');

        $writer->save('php://output');
        exit;
    }

}

/* End of file Export.php */
