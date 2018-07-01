<?php
class Grande_model extends CI_Model {
	
	public function __construct() {
		$this->load->database();
	}

	//Menampilkan Data Kontak
	public function kontak() 
	{
		$query = $this->db->get('tb_kontak');
		return $query->row_array();
	}

	//Mengirim Pesan
	public function kirim_pesan($data)
	{
		return $this->db->insert('tb_pesan',$data);
	}

	//Menampilkan Data Rumah
	public function rumah() 
	{
		$query = $this->db->get('tb_rumah');
		return $query->result_array();
	}

	//Melihat Rumah Tertentu
	public function detail($id)
	{
		$query = $this->db->get_where('tb_rumah', array('rumah_id' => $id));
		return $query->row_array();
	}

	public function berita() 
	{
		$this->db->select('*');
		$this->db->from('tb_berita');
		$this->db->join('tb_user', 'berita_dibuat = username');
		$query = $this->db->get();
		return $query->result_array();
	}
}
?>