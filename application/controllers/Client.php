<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {


	public function add_new_client()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/client/add_new_client','',true);
		$this->load->view('main_layout',$data);
	}
	public function list_of_client()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/client/list_of_client','',true);
		$this->load->view('main_layout',$data);
	}
	public function client_details()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/client/client_details','',true);
		$this->load->view('main_layout',$data);
	}
}
