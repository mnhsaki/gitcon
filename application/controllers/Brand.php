<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Controller {

	public function add_new_brand()
	{
        $this->load->view('pages/product/brand/add_new_brand');
	}
	public function list_of_brand()
	{
        $this->load->view('pages/product/brand/list_of_brand');
	}
}
