
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_Controller {


	public function all_inventory()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/inventory/all_inventory','',true);
        $this->load->view('main_layout',$data);
	}
	public function inventory_adjustment()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/inventory/inventory_adjustment','',true);
        $this->load->view('main_layout',$data);
	}
	public function inventory_adjustment_list()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/inventory/inventory_adjustment_list','',true);
        $this->load->view('main_layout',$data);
	}



}
