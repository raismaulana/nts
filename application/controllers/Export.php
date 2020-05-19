<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Export extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kegiatan_model');
        
    }

    public function tes() {
        // for ($i=0; $i < 30; $i++) { 
        //     $this->db->insert('kegiatan', [
        //         'id_laporan' => '1',
        //         'aktivitas_kegiatan' => $i,
        //         'kuantitas_output_kegiatan' => $i,
        //         'status_kegiatan' => '0',
        //         'tanggal_kegiatan' => '2020-19-5',
        //         'tanggal_update_kegiatan' => '2020-19-5',
        //         'waktu_kegiatan' => "$i.00"
        //     ]); 
        // }
        $id_laporan = '1';

        //mengambil data berdasarkan id_laporan dan status kegiatan diterima (kode= 1)
        $activities = $this->kegiatan_model->get_where_array([
            'id_laporan' => $id_laporan,
            'status_kegiatan' => '1'
            ])->result();
        
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
        $judul = "Laporan Kegiatan Harian Seksi x\nBidang x";
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
        $rowNamaStafKasi = $rowStafKasi+3;
        $rowKabid = $rowNamaStafKasi+2;
        $rowNamaKabid = $rowKabid+3;
        //tanggal
        
        $sheet->setCellValue("D$rowTanggal", 'Sidoarjo, '.date('d-m-Y'));
        //staf
        $sheet->setCellValue("D$rowStafKasi", "jabatan");
        $sheet->setCellValue("D$rowNamaStafKasi", "nama staf");
        //kasi
        $sheet->setCellValue("B$rowStafKasi", "jabatan");
        $sheet->setCellValue("B$rowNamaStafKasi", "nama kasi");
        //kabid
        $sheet->setCellValue("C$rowKabid", "jabatan");
        $sheet->setCellValue("C$rowNamaKabid", "nama kabid");
        $spreadsheet->getActiveSheet()->getStyle("C$rowKabid:C$rowNamaKabid")->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);


        //atur size lebar cell
        $spreadsheet->getActiveSheet()->getColumnDimension("A")->setWidth(2.63);
        $spreadsheet->getActiveSheet()->getColumnDimension("B")->setWidth(12.13);
        $spreadsheet->getActiveSheet()->getColumnDimension("C")->setWidth(34.00);
        $spreadsheet->getActiveSheet()->getColumnDimension("D")->setWidth(19.25);
        $spreadsheet->getActiveSheet()->getColumnDimension("E")->setWidth(11.00);

        //membuat nama file
        $laporan = $this->db->get_where('laporan', ['id_laporan' => $id_laporan])->row();
        
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
