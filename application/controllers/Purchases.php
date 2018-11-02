
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchases extends CI_Controller {


	public function add_new_purchases()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/purchases/add_new_purchases','',true);
        $this->load->view('main_layout',$data);
	}
	public function list_of_purchases()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/purchases/list_of_purchases','',true);
        $this->load->view('main_layout',$data);
	}
	public function purchases_return()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/purchases/purchases_return','',true);
        $this->load->view('main_layout',$data);
	}



}
