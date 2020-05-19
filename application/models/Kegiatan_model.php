<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan_model extends CI_Model {

    var $tabel;

    public function __construct()
    {
        parent::__construct();
        $this->context = array(
            'tabel' => 'kegiatan'
        );
    }

    public function select()
    {
        $this->db->select('kegiatan.id_kegiatan, pengguna.nama_pengguna, kegiatan.aktivitas_kegiatan, kegiatan.kuantitas_output_kegiatan, kegiatan.tanggal_kegiatan, kegiatan.status_kegiatan');
        $this->db->join('laporan', 'laporan.id_laporan = kegiatan.id_laporan');
        $this->db->join('pengguna', 'pengguna.id_pengguna = laporan.id_pengguna');
        $this->db->order_by('kegiatan.tanggal_kegiatan', 'desc');
        
        
        return $this->db->get($this->context['tabel'])->result();
        
    }

    public function select_sort($where)
    {
        $this->db->select('kegiatan.id_kegiatan, pengguna.nama_pengguna, kegiatan.aktivitas_kegiatan, kegiatan.kuantitas_output_kegiatan, kegiatan.tanggal_kegiatan, kegiatan.status_kegiatan');
        $this->db->join('laporan', 'laporan.id_laporan = kegiatan.id_laporan');
        $this->db->join('pengguna', 'pengguna.id_pengguna = laporan.id_pengguna');
        $this->db->join('staf', 'staf.id_pengguna = pengguna.id_pengguna');
        $this->db->join('seksi', 'seksi.id_seksi = staf.id_seksi');
        $this->db->order_by('kegiatan.tanggal_kegiatan', 'desc');
        $this->db->where($where);
        
        return $this->db->get($this->context['tabel'])->result();
        
    }

    public function insert($data)
    {
        return $this->db->insert($this->context['tabel'], $data);
        
    }

    public function durasi($start, $end)
    {
        $date1 = strtotime($start);  
		$date2 = strtotime($end);

		$diff = abs($date2-$date1);
		$jam = floor($diff/(60*60));
        $menit = floor(($diff - $jam *60*60)/60);
        $text = $jam."jam, ".$menit."menit";
        return $text;
    }

    public function select_where($where)
    {
        $this->db->where('id_laporan', $where);
        return $this->db->get($this->context['tabel'])->result();
        
    }

    public function select_where_custom($where)
    {
        $this->db->select();
        $this->db->join('laporan', 'laporan.id_laporan = kegiatan.id_laporan');
        $this->db->join('pengguna', 'pengguna.id_pengguna = laporan.id_pengguna');
        $this->db->join('staf', 'staf.id_pengguna = pengguna.id_pengguna');
        $this->db->join('seksi', 'seksi.id_seksi = staf.id_seksi');
        $this->db->where($where);
        
        return $this->db->get($this->context['tabel'])->num_rows();
        
    }

    public function select_where_default($where)
    {
        $this->db->where($where);
        
        return $this->db->get($this->context['tabel'])->num_rows();
        
    }
    
    public function select_where_join_pengguna($where)
    {
        $this->db->select();
        $this->db->join('laporan', 'laporan.id_laporan = kegiatan.id_laporan');
        $this->db->join('pengguna', 'laporan.id_pengguna = pengguna.id_pengguna');
        $this->db->join('staf', 'staf.id_pengguna = pengguna.id_pengguna');
        $this->db->join('jabatan', 'jabatan.id_jabatan = staf.id_jabatan', 'inner');
        $this->db->join('seksi', 'seksi.id_seksi = staf.id_seksi');
        $this->db->where('kegiatan.id_kegiatan', $where);

        return $this->db->get($this->context['tabel'])->result();
        
    }    

    public function select_where_kegiatan($where)
    {
        $this->db->where('id_kegiatan', $where);
        return $this->db->get($this->context['tabel'])->result();
        
    }

    public function update($id, $data){
        $this->db->where('id_kegiatan', $id);
        return $this->db->update($this->context['tabel'], $data);
    }

    public function delete($id)
    {
        $this->db->where('id_kegiatan', $id);
        
        return $this->db->delete($this->context['tabel']);
        
    }

    public function get_where_array($arrayWhere) {
        return $this->db->get_where($this->context['tabel'], $arrayWhere);
    }

}

/* End of file Kegiatan_model.php */
