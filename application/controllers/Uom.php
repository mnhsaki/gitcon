<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uom extends CI_Controller {


	public function add_new_uom()
	{
        $this->load->view('pages/product/uom/add_new_uom');
	}
	public function list_of_uom()
	{
        $this->load->view('pages/product/uomo/list_of_uom');
	}
}
