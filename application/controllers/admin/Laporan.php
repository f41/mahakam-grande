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

	public function cetak_berkas_lengkap()
	{
		$data = array (	
						'title'		=> 'Cetak Berkas Lengkap',
						'lengkap'	=> $this->Admin_model->berkas_lengkap()
					  );
		$this->load->view('admin/cetak_lap_berkas_lengkap_view',$data);
	}

	public function filter_berkas_lengkap()
	{
		$start = substr($this->input->post('datefilter'), 0,10);
		$end = substr($this->input->post('datefilter'), -10, 10);
		$data = array (	
						'title'		=> 'Berkas Lengkap',
						'isi'	    => 'admin/filter_lap_berkas_lengkap_view',
						'lengkap'	=> $this->Admin_model->filter_berkas_lengkap($start, $end),
						'start'		=> $start,
						'end'		=> $end
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

	public function cetak_berkas_tidak_lengkap()
	{
		$data = array (	
						'title'		=> 'Cetak Berkas Tidak Lengkap',
						'lengkap'	=> $this->Admin_model->berkas_tidaklengkap()
					  );
		$this->load->view('admin/cetak_lap_berkas_tidaklengkap_view',$data);
	}

	public function filter_berkas_tidak_lengkap()
	{
		$start = substr($this->input->post('datefilter'), 0,10);
		$end = substr($this->input->post('datefilter'), -10, 10);
		$data = array (	
						'title'		=> 'Berkas Lengkap',
						'isi'	    => 'admin/filter_lap_berkas_tidaklengkap_view',
						'lengkap'	=> $this->Admin_model->filter_berkas_tidaklengkap($start, $end),
						'start'		=> $start,
						'end'		=> $end
					  );
		$this->load->view('admin/layout/wrapper',$data);
	}
}