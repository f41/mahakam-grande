<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct() 
	{
			parent::__construct();
			$this->load->model('Admin_model');
	}

	public function berkas_lengkap()
	{
		$data = array (	
						'title'		=> 'Berkas Lengkap',
						'isi'	    => 'admin/lap_berkas_lengkap_view',
						'lengkap'	=> $this->Admin_model->berkas_lengkap()
					  );
		$this->load->view('admin/layout/wrapper',$data);
	}

	public function berkas_tidak_lengkap()
	{
		$data = array (	
						'title'		=> 'Berkas Lengkap',
						'isi'	    => 'admin/lap_berkas_tidaklengkap_view',
						'lengkap'	=> $this->Admin_model->berkas_tidaklengkap()
					  );
		$this->load->view('admin/layout/wrapper',$data);
	}
}