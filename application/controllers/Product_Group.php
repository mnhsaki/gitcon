<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product_Group extends CI_Controller { //Controller for Product Group

    public function __construct() {
        parent::__construct();
        $this->load->model('app_model');
    }

    public function add_new_Product_group() {

        $data = '';
        $this->form_validation->set_rules('product_group_id', 'Product Group ID', 'required');
        $this->form_validation->set_rules('product_group_name', 'Product Group Name', 'required');

        if ($this->form_validation->run() == TRUE) {
            $db_data = array(
                'product_group_id' => $this->input->post('product_group_id'),
                'product_group_name' => $this->input->post('product_group_name'),
                'product_group_note' => $this->input->post('product_group_note')
            );
            $data['status'] = $this->app_model->insert_data('product_group', $db_data);
        }
        $this->load->view('pages/product/group/add_new_group', $data);
    }

    public function list_of_Product_group() {
        $data['rows']=$this->app_model->get_all('product_group');
        $this->load->view('pages/product/group/list_of_group',$data);
    }

}
