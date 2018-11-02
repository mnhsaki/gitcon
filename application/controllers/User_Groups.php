<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Groups extends CI_Controller {


	public function add_new_user_groups()
	{
       	$this->load->view('pages/settings/UserGroups/add_new_user_groups');
	}
	public function manage_user_groups()
	{
        $this->load->view('pages/settings/UserGroups/manage_user_groups');
	}
}
