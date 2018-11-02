<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeliveryVoicher extends CI_Controller {


	public function create_delivery_voucher()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/delivery_voicher/create_delivery_voucher','',true);
		$this->load->view('main_layout',$data);
	}
	public function today_delivery_list()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/delivery_voicher/today_delivery_list','',true);
		$this->load->view('main_layout',$data);
	}
	public function delivery_voucher_list()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/delivery_voicher/delivery_voucher_list','',true);
		$this->load->view('main_layout',$data);
	}
	public function today_receive_list()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/delivery_voicher/today_receive_list','',true);
		$this->load->view('main_layout',$data);
	}
	public function today_voucher_list()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/delivery_voicher/today_voucher_list','',true);
		$this->load->view('main_layout',$data);
	}
}
