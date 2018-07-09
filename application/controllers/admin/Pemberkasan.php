<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Makassar");
class Pemberkasan extends CI_Controller {

	public function __construct() 
	{
			parent::__construct();
			$this->load->model('Admin_model');
	}

	public function index()
	{
		$data = array (	
						'title'			=> 'Rumah',
						'isi'	    	=> 'admin/pemberkasan_view',
						'pemberkasan'	=> $this->Admin_model->pemberkasan()
					  );
		$this->load->view('admin/layout/wrapper',$data);
	}


	public function tambah()
	{
		$this->form_validation->set_rules('berkas_id','Nama Rumah','required');
		if ($this->form_validation->run() === FALSE) 
		{
			$data = array (	
						'title'		=> 'Tambah Rumah',
						'isi'	    => 'admin/tambah_pemberkasan_view',
						'rumah'		=> $this->Admin_model->rumah(),
						'id'		=> date('ymdhis')
					);
			$this->load->view('admin/layout/wrapper',$data);
		}else{

		$nomorberkas = strtolower($this->input->post('berkas_id'));
		
	    $upload_config = array(
	    						'encrypt_name'	=> TRUE,
	    						'upload_path' 	=> './assets/images/berkas/' . $nomorberkas . '/', 
	    						'allowed_types' =>'jpg|jpeg|gif|png'
	    					);

	    $this->load->library('upload', $upload_config);

	    // create an album if not already exist in uploads dir
    	// wouldn't make more sence if this part is done if there are no errors and right before the upload ??
    	//if (!is_dir('./assets/'))
    	//{
       //		mkdir('./assets/', 0777, true);
    	//}
    	//$dir_exist = true; // flag for checking the directory exist or not
    	if (!is_dir('./assets/images/berkas/' . $nomorberkas . '/'))
    	{
        	mkdir('./assets/images/berkas/' . $nomorberkas . '/', 0777, true);
        	$dir_exist = false; // dir not exist
    	}
    	else{
    	}
//=======================================================================================================
    	$this->upload->do_upload('berkas_foto');
	    $foto = $this->upload->data();

	    $this->upload->do_upload('berkas_ktp_suami');
	    $ktp_suami = $this->upload->data();

	    $this->upload->do_upload('berkas_ktp_istri');
	    $ktp_istri = $this->upload->data();

	    $this->upload->do_upload('berkas_kk');
	    $kk = $this->upload->data();

	    $this->upload->do_upload('berkas_akta_nikah');
	    $akta_nikah = $this->upload->data();

	    $this->upload->do_upload('berkas_btn');
	    $btn = $this->upload->data();

	    $this->upload->do_upload('berkas_npwp');
	    $npwp = $this->upload->data();

	    $this->upload->do_upload('berkas_spt');
	    $spt = $this->upload->data();

	    $this->upload->do_upload('berkas_srt_ket_tidak_ada_rumah');
	    $srt_ket = $this->upload->data();
//=======================================================================================================

	    $data = array(
	            	'pemberkasan_id'    	  	=> $this->input->post('berkas_id'),
	            	'pemberkasan_nama'    		=> $this->input->post('berkas_nama'),
	            	'pemberkasan_rumah_id'    	=> $this->input->post('berkas_rumah_id'),
	            	'pemberkasan_foto' 			=> $foto['file_name'],
	            	'pemberkasan_ktp_suami' 	=> $ktp_suami['file_name'],
	            	'pemberkasan_ktp_istri' 	=> $ktp_istri['file_name'],
	            	'pemberkasan_kk' 			=> $kk['file_name'],
	            	'pemberkasan_akta_nikah' 	=> $akta_nikah['file_name'],
	            	'pemberkasan_btn'			=> $btn['file_name'],
	            	'pemberkasan_npwp'			=> $npwp['file_name'],
	            	'pemberkasan_spt'			=> $spt['file_name'],
	            	'pemberkasan_srt_ket_tidak_ada_rumah'	=> $srt_ket['file_name'],
	            	'pemberkasan_dibuat'		=> strtolower($this->input->post('berkas_dibuat')),
	            	'pemberkasan_tglbuat'		=> date('Y-m-d h:i:s')
            	);
		    
		$this->Admin_model->tambah_pemberkasan($data);
		redirect(base_url().'admin/pemberkasan'); 	
	}
}

	public function pernyataan()
	{
		$data = array (	
						'title'			=> 'Rumah'
					  );
		$this->load->view('admin/pernyataan_view',$data);
	}
}