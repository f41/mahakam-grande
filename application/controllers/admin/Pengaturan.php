<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	public function __construct() 
	{
			parent::__construct();
			$this->load->model('Admin_model');
	}

	public function kontak()
	{
		$data = array (	
						'title'		=> 'Kontak',
						'isi'	    => 'admin/pengaturan_kontak_view',
						'kontak'	=> $this->Admin_model->kontak()
					  );
		$this->load->view('admin/layout/wrapper',$data);
	}
}