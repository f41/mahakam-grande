<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
	public function __construct() 
	{
			parent::__construct();
			$this->load->model('Grande_model');
	}

	public function index()
	{
		$data = array (	
						'title'		=> 'Berita',
						'menu'		=> 'berita',
						'isi'	    => 'berita_view',
						'rumah'		=> $this->Grande_model->rumah(),
						'kontak'	=> $this->Grande_model->kontak(),
						'berita'	=> $this->Grande_model->berita()
					  );
		$this->load->view('layout/wrapper',$data);
	}

	public function detail($id)
	{
		$data = array (	
						'title'		=> 'Berita',
						'menu'		=> 'berita',
						'berita'	=> $this->Grande_model->berita_detail($id),
						'kontak'	=> $this->Grande_model->kontak(),
						'isi'	    => 'detail_berita_view'
					  );
		$this->load->view('layout/wrapper',$data);
	}
}