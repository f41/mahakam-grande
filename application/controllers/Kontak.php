<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
}