
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('app_model');
    }

    public function add_new_product() {
        $data['product_groups']=$this->app_model->get_all('product_group');
        $data['product_category']=$this->app_model->get_all('product_category');
        $this->load->view('pages/product/add_new_product',$data);
    }

    public function list_of_product() {

        $this->load->view('pages/product/list_of_product');
    }

    public function print_barcode_label() {
        $this->load->view('pages/product/print_barcode_label');
    }

    public function product_view() {
        $this->load->view('pages/product/product_view');
    }

}
