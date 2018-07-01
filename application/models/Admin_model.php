<?php
class Admin_model extends CI_Model {
	
	public function __construct() {
		$this->load->database();
	}


	//Menampilkan Data Kontak
	public function kontak() 
	{
		$query = $this->db->get('tb_kontak');
		return $query->row_array();
	}

// Perumahan
	//Menampilkan Data Rumah
	public function rumah() 
	{
		$query = $this->db->get('tb_rumah');
		return $query->result_array();
	}

	//Untuk Menambah Rumah
	public function tambah_rumah($data)
	{
		return $this->db->insert('tb_rumah',$data);
	}

	public function detail_rumah($id)
	{
		$query = $this->db->get_where('tb_rumah', array('rumah_id' => $id));
		return $query->row_array();
	}
// End Perumahan

// Berita
	public function berita() 
	{
		$this->db->select('*');
		$this->db->from('tb_berita');
		$this->db->join('tb_user', 'berita_dibuat = username');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function tambah_berita($data)
	{
		return $this->db->insert('tb_berita',$data);
	}

	//Menampilkan Detail Berita Di Halaman Edit Berita
	public function detail_berita($id) 
	{
		$query = $this->db->get_where('tb_berita', array('berita_id' => $id));
		return $query->row_array();
	}

	//Update Data Berita Setelah Di Edit Di Halaman Edt
	public function update_berita($data) {
		$this->db->where('berita_id',$data['berita_id']);
		return $this->db->update('tb_berita',$data);
	}
    
    //Hapus User
	public function hapus_berita($id) {
		$this->db->where('berita_id',$id);
		return $this->db->delete('tb_berita');
	}
// End Berita
}
?>