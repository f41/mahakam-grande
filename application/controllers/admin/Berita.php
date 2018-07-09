<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Makassar");
class Berita extends CI_Controller {
	public function __construct() 
	{
			parent::__construct();
			$this->load->model('Admin_model');
	}

	public function index()
	{
		$data = array (	
						'title'		=> 'Berita',
						'menu'		=> 'berita',
						'isi'	    => 'admin/berita_view',
						'berita'	=> $this->Admin_model->berita()
					  );
		$this->load->view('admin/layout/wrapper',$data);
	}

	//Menambah Data Berita
	public function tambah() {
		$this->form_validation->set_rules('berita_judul','Judul Beritax','required');
		if ($this->form_validation->run() === FALSE) {
			$data=array('title' => 'Tambah Berita',
						'isi'	=> 'admin/tambah_berita_view');
			$this->load->view('admin/layout/wrapper',$data);
        }else{
                
	    		$config['encrypt_name']		= TRUE;
                $config['upload_path'] 		= './assets/images/berita/';
	    		$config['allowed_types']    = 'jpg|jpeg|png|gif';
	    		$config['max_size']         = '4096'; // 4 MB

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('berita_gambar')) {
                        $error = array('error' => $this->upload->display_errors(),
                                       'isi'   => 'admin/tambah_berita_view');
                        $this->load->view('admin/layout/wrapper', $error);
        		}else{
                     $gbr = $this->upload->data();
			         $data = array(
                        'berita_id'    		=> date('dmyhis'),
                        'berita_judul'		=> $this->input->post('berita_judul'),
                        'berita_gambar'     => $gbr['file_name'],
                        'berita_isi'		=> $this->input->post('berita_isi'),
                        'berita_tglbuat'	=> date('Y-m-d h:i:s'),
                       	'berita_dibuat'		=> $this->input->post('berita_dibuat'),
                       	'berita_status'		=> $this->input->post('berita_status')
                    );
		          $this->Admin_model->tambah_berita($data);
		          redirect(base_url().'admin/berita');
		      }
	   }
    }
    
    //Menghapus Data Paket
	public function hapus($id) {
		$this->Admin_model->hapus_berita($id);
		redirect(base_url().'admin/berita');
	}
}