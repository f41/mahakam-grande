<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Makassar");

class Kontak extends CI_Controller {
	public function __construct() 
	{
			parent::__construct();
			$this->load->model('Grande_model');
	}

	public function index()
	{
		$data = array (	
						'title'		=> 'Kontak',
						'menu'		=> 'kontak',
						'isi'	    => 'kontak_view',
						'kontak'	=> $this->Grande_model->kontak()
					  );
		$this->load->view('layout/wrapper',$data);
	}

	public function kirim_pesan()
	{
		$data = array(	'pesan_id' 		=> date('dmyhis'),
						'pesan_nama'	=> $this->input->post('pesan_nama'),
						'pesan_nohp'	=> $this->input->post('pesan_nohp'),
						'pesan_email'	=> $this->input->post('pesan_email'),
						'pesan_isi'		=> $this->input->post('pesan_isi')
					);
		$this->Grande_model->kirim_pesan($data);
		redirect(base_url().'kontak');
	}
}