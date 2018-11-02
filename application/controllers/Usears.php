<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usears extends CI_Controller {


	public function add_new_user()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/settings/usears/add_new_user','',true);
		$this->load->view('main_layout',$data);
	}
	public function manage_user()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/settings/usears/manage_user','',true);
		$this->load->view('main_layout',$data);
	}
}
