<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('app_model');
    }

    public function add_new_category() {  
        
        $data = '';
        $this->form_validation->set_rules('category_id', 'Category ID', 'required');
        $this->form_validation->set_rules('category_name', 'Category Name', 'required');

        if ($this->form_validation->run() == TRUE) {
            $db_data = array(
                'product_category_id' => $this->input->post('category_id'),
                'product_category_name' => $this->input->post('category_name'),
                'product_category_note' => $this->input->post('category_note')
            );
            $data['status'] = $this->app_model->insert_data('product_category', $db_data);
        }
        
        $this->load->view('pages/product/category/add_new_category', $data);
    }

    public function list_of_category() {
        $data['rows']=$this->app_model->get_all('product_category');
        $this->load->view('pages/product/category/list_of_category',$data);
    }

}
