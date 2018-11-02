<?php

class App_model extends CI_Model {

    public function __construct() {
        
    }

    //COMMON
    public function get_query($sql) {
        return $this->db->query($sql)->result_array();
    }
    public function get_all($table_name) {
        return $this->db->get($table_name)->result_array();
    }

    public function get_by_key($table_name, $key, $value) {
        $where = array($key => $value);
        return $this->db->get_where($table_name, $where)->result_array();
    }

    public function insert_data($table_name, $data) {
        if ($this->db->insert($table_name, $data)) {
            $status['code'] = 0;
            $status['message'] = 'Data Added Successfully';
        } else {
            $status['code'] = $this->db->error()['code'];
            $status['message'] = 'Operation Failed: ' . $this->db->error()['message'];
        }
        return $status;
    }

//
//  SETTINGS
//
    
//    PRODUCT
    public function product_group_insert() {
        $data = array(
            'product_group_id' => $this->input->post('product_group_id'),
            'product_group_name' => $this->input->post('product_group_name'),
            'product_group_note' => $this->input->post('product_group_note')
        );


        if ($this->db->insert('product_group', $data)) {
            $status['code'] = 0;
            $status['message'] = 'New Product Group Added Successfully';
        } else {
            $status['code'] = $this->db->error()['code'];
            $status['message'] = 'Operation Failed: ' . $this->db->error()['message'];
        }
        return $status;
    }

    public function product_group_get_all() {
        return $this->db->get('product_group')->result_array();
    }

    public function product_get_all() {
        return $this->db->get('product');
    }

    public function product_insert() {
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
