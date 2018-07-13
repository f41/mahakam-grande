<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Makassar");

class Galeri extends CI_Controller {
	public function __construct() 
	{
			parent::__construct();
			$this->load->model('Grande_model');
	}

	public function index()
	{
		$data = array (	
						'title'		=> 'Galery',
						'menu'		=> 'kontak',
						'isi'	    => 'galeri_view',
						'kontak'	=> $this->Grande_model->kontak()
					  );
		$this->load->view('layout/wrapper',$data);
	}
}