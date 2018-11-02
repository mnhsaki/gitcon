<?php

class Product_model extends CI_Model {

    public function __construct() {
        
    }

    public function get_all() {
        return $this->db->get('product');
    }

    public function insert() {
        $data = array(
            'product_id' => $this->input->post('product_id'),
            'product_name' => $this->input->post('product_name')
        );


        if ($this->db->insert('product', $data)) {
            $status['code'] = 0;
            $status['message'] = 'New Zone Added Successfully';
        } else {
            $status['code'] = $this->db->error()['code'];
            $status['message'] = 'Operation Failed: ' . $this->db->error()['message'];
        }
        return $status;
    }


}
