<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rumah extends CI_Controller {
	public function __construct() 
	{
			parent::__construct();
			$this->load->model('Grande_model');
	}

	public function detail($id)
	{
		$data = array (	
						'title'		=> 'Detail',
						'menu'		=> 'rumah',
						'rumah'		=> $this->Grande_model->detail($id),
						'kontak'	=> $this->Grande_model->kontak(),
						'isi'	    => 'rumah_view'
					  );
		$this->load->view('layout/wrapper',$data);
	}
}