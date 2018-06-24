<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rumah extends CI_Controller {

	public function __construct() 
	{
			parent::__construct();
			$this->load->model('Admin_model');
	}

	public function index()
	{
		$data = array (	
						'title'		=> 'Rumah',
						'isi'	    => 'admin/rumah_view',
						'rumah'	=> $this->Admin_model->rumah()
					  );
		$this->load->view('admin/layout/wrapper',$data);
	}

	public function tambah()
	{
		$this->form_validation->set_rules('rumah_nama','Nama Rumah','required');
		if ($this->form_validation->run() === FALSE) 
		{
			$data = array (	
						'title'		=> 'Tambah Rumah',
						'isi'	    => 'admin/tambah_rumah_view',
						'rumah'		=> $this->Admin_model->rumah()
					);
			$this->load->view('admin/layout/wrapper',$data);
		}else{
	        $this->load->library('upload');
			$dataInfo = array();
			$files = $_FILES;
			for($i=0; $i<=3; $i++)
			    {
			        $_FILES['userfile']['name']		= $files['userfile']['name'][$i];
			        $_FILES['userfile']['type']		= $files['userfile']['type'][$i];
			        $_FILES['userfile']['tmp_name']	= $files['userfile']['tmp_name'][$i];
			        $_FILES['userfile']['error']	= $files['userfile']['error'][$i];
			        $_FILES['userfile']['size']		= $files['userfile']['size'][$i];
			 
			        $this->upload->initialize($this->set_upload_options());
			        $this->upload->do_upload();
			        $dataInfo[] = $this->upload->data();
			    }

			$data = array(
	            	'rumah_nama'    	  	=> $this->input->post('rumah_nama'),
	            	'rumah_luas_tanah'    	=> $this->input->post('rumah_luas_tanah'),
	            	'rumah_luas_bangunan' 	=> $this->input->post('rumah_luas_bangunan'),
	            	'rumah_kamar_tidur' 	=> $this->input->post('rumah_kamar_tidur'),
	            	'rumah_kamar_mandi' 	=> $this->input->post('rumah_kamar_mandi'),
	            	'rumah_lantai' 			=> $this->input->post('rumah_lantai'),
	            	'rumah_spesifikasi'		=> $this->input->post('rumah_spesifikasi'),
	            	'rumah_fasilitas'		=> $this->input->post('rumah_fasilitas'),
	            	//'rumah_gmap'			=> $this->input->post('rumah_gmap'),
	            	'rumah_gambar1'			=> $dataInfo[0]['file_name'],
	            	'rumah_gambar2'			=> $dataInfo[1]['file_name'],
	            	'rumah_gambar3'			=> $dataInfo[2]['file_name'],
	            	'rumah_gambar4'			=> $dataInfo[3]['file_name'],
	            	'rumah_harga'			=> $this->input->post('rumah_harga')
            	);
		    
		    $this->Admin_model->tambah_rumah($data);
		    redirect(base_url().'admin/rumah');
		}
	}

	private function set_upload_options()
	{
	    $config = array();
	    $config['file_name']        = date('dmyhis');
	    $config['encrypt_name']		= TRUE;
	    $config['upload_path'] 		= './assets/images/rumah/';
	    $config['allowed_types']    = 'jpg|jpeg|png|gif';
	    $config['max_size']         = '2048'; // 2 MB
    	
    	return $config;
	}

}