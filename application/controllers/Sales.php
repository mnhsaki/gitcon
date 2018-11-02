
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {


	public function add_new_sale()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/sales/add_new_sales','',true);
        $this->load->view('main_layout',$data);
	}

	public function today_sale()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/sales/today_sale','',true);
		$this->load->view('main_layout',$data);
		//$this->load->view('pages/sales/today_sale');
	}
	public function list_of_today_sale()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/sales/list_of_today_sale','',true);
        $this->load->view('main_layout',$data);
	}
	public function return_product()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/sales/return_product','',true);
        $this->load->view('main_layout',$data);
	}
	public function list_of_due()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/sales/list_of_due','',true);
        $this->load->view('main_layout',$data);
	}


}
