<?php

class Division_model extends CI_Model {

    public function __construct() {
        
    }

    public function get_all() {
        return $this->db->get('division');
    }

    public function get_list() {
        $query = $this->db->get('division');
        return $query->result_array();
    }

    public function insert() {
        $data = array(
            'division_id' => $this->input->post('division_id'),
            'division_name' => $this->input->post('division_name')
        );


        if ($this->db->insert('division', $data)) {
            $status['code'] = 0;
            $status['message'] = 'New Division Added Successfully';
        } else {
            $status['code'] = $this->db->error()['code'];
            $status['message'] = 'Operation Failed: ' . $this->db->error()['message'];
        }
        return $status;
    }

}
