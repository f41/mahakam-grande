<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data = array (	
						'title'		=> 'Home',
						'isi'	    => 'admin/dashboard_view'
					  );
		$this->load->view('admin/layout/wrapper',$data);
	}
}