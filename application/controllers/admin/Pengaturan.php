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


	public function ubah_alamatkantor() {
		$data = array(
                    'kontak_id'   			=> '0',
					'kontak_alamatkantor'   => $this->input->post('kontak_alamatkantor')
					);
        $this->Admin_model->ubah_kontak($data);
		redirect(base_url().'admin/pengaturan/kontak');
	}

	public function ubah_nohp() {
		$data = array(
                    'kontak_id'   			=> '0',
					'kontak_nohp'			=> $this->input->post('kontak_nohp')
					);
        $this->Admin_model->ubah_kontak($data);
		redirect(base_url().'admin/pengaturan/kontak');
	}

	public function ubah_email() {
		$data = array(
                    'kontak_id'   			=> '0',
					'kontak_email'			=> $this->input->post('kontak_email')
					);
        $this->Admin_model->ubah_kontak($data);
		redirect(base_url().'admin/pengaturan/kontak');
	}

	public function ubah_gmap() {
		$data = array(
                    'kontak_id'   			=> '0',
					'kontak_gmap'			=> $this->input->post('kontak_gmap')
					);
        $this->Admin_model->ubah_kontak($data);
		redirect(base_url().'admin/pengaturan/kontak');
	}
}