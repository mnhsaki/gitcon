<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{

		$data=array();
        $data['admin_main_content']=$this->load->view('pages/admin_dashbord','',true);
		$this->load->view('main_layout',$data);
	}

	public function dashbord()
	{

		$data=array();
        $data['admin_main_content']=$this->load->view('pages/admin_dashbord','',true);
		$this->load->view('main_layout',$data);
	}
}
