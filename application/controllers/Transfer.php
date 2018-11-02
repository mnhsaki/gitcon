<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transfer extends CI_Controller {


	public function add_new_transfer()
	{

		$data=array();
        $data['admin_main_content']=$this->load->view('pages/transfer/add_new_transfer','',true);
		$this->load->view('main_layout',$data);
	}

	public function list_of_transfer()
	{

		$data=array();
        $data['admin_main_content']=$this->load->view('pages/transfer/list_of_transfer','',true);
		$this->load->view('main_layout',$data);
	}
}
