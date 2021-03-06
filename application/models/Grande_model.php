<?php
class Grande_model extends CI_Model {
	
	public function __construct() {
		$this->load->database();
	}

	//Slider
	public function slider()
	{
		$query = $this->db->get('tb_slider');
		return $query->result_array();
	}

	public function testimoni()
	{
		$query = $this->db->get('tb_testimoni');
		return $query->result_array();
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
		$this->db->where('berita_status', 'POST');
		$this->db->order_by('berita_tglbuat', 'DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	//Melihat Berita Tertentu
	public function berita_detail($id)
	{
		$this->db->select('*');
		$this->db->from('tb_berita');
		$this->db->join('tb_user', 'berita_dibuat = username');
		$this->db->where('berita_id', $id);
		$query = $this->db->get();
		return $query->row_array();
	}
}
?>