
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {


	public function add_new_invoice()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/invoice/add_new_invoice','',true);
        $this->load->view('main_layout',$data);
	}
	public function list_of_invoice()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/invoice/list_of_invoice','',true);
        $this->load->view('main_layout',$data);
	}
	


}
