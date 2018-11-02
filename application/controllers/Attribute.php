<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attribute extends CI_Controller {


	public function add_new_attribute()
	{
        $this->load->view('pages/product/attribute/add_new_attribute');
	}
	public function list_of_attribute()
	{
		$this->load->view('pages/product/attribute/list_of_attribute');
	}
}
