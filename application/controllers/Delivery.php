<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delivery extends CI_Controller {


	public function create_delivery()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/delivery/create_delivery','',true);
		$this->load->view('main_layout',$data);
	}
	public function list_of_delivery()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/delivery/list_of_delivery','',true);
		$this->load->view('main_layout',$data);
	}
	public function create_delivery_warehouses()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/delivery/create_delivery_warehouses','',true);
		$this->load->view('main_layout',$data);
	}
	public function list_of_warehouses()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/delivery/list_of_warehouses','',true);
		$this->load->view('main_layout',$data);
	}

}
