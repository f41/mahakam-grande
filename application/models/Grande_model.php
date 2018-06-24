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

	//Menampilkan Data Rumah
	public function rumah() 
	{
		$query = $this->db->get('tb_rumah');
		return $query->result_array();
	}

	public function detail($id)
	{
		$query = $this->db->get_where('tb_rumah', array('rumah_id' => $id));
		return $query->row_array();
	}
}
?>