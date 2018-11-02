
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Suppliers extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('app_model');
    }

    public function add_new_suppliers() {
        $data = array();
        $this->form_validation->set_rules('supplierName', 'Supplier Name', 'required');
        $this->form_validation->set_rules('supplierEmail', 'Supplier Email', 'required');
        $this->form_validation->set_rules('supplierPhone', 'Supplier Phone Number', 'required');
        $this->form_validation->set_rules('opening_balance', 'Opening Balance', 'required');
        $this->form_validation->set_rules('supplierAddress', 'Supplier Address', 'required');


        if ($this->form_validation->run() == TRUE) {
            $db_data = array(
                'supplier_name' => $this->input->post('supplierName'),
                'supplier_email' => $this->input->post('supplierEmail'),
                'supplier_phone_number' => $this->input->post('supplierPhone'),
                'supplier_opening_balance' => $this->input->post('opening_balance'),
                'supplier_address' => $this->input->post('supplierAddress')
            );
            $data['status'] = $this->app_model->insert_data('suppliers', $db_data);
        }
        $this->load->view('pages/suppliers/add_new_suppliers', $data);
    }

    public function list_of_suppliers() {
        
        
        
        $data['rows'] = $this->app_model->get_all('suppliers');
        $this->load->view('pages/suppliers/list_of_suppliers', $data);
        
    }

    public function suppliers_payment() {
        $data = array();
        $data['admin_main_content'] = $this->load->view('pages/suppliers/suppliers_payment', '', true);
        $this->load->view('main_layout', $data);
    }

    public function payment_report() {
        $data = array();
        $data['admin_main_content'] = $this->load->view('pages/suppliers/payment_report', '', true);
        $this->load->view('main_layout', $data);
    }

}
