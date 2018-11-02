
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expenses extends CI_Controller {


	public function add_new_expenses()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/expenses/add_new_expenses','',true);
        $this->load->view('main_layout',$data);
	}
	public function list_of_expences()
	{
		$data=array();
        $data['admin_main_content']=$this->load->view('pages/expenses/list_of_expences','',true);
        $this->load->view('main_layout',$data);
	}
	

}
