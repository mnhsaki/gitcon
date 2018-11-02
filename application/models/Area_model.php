<?php

class Area_model extends CI_Model {

    public function __construct() {
        
    }

    public function get_all() {
        return $this->db->get('zone');
    }

    public function insert() {
        $data = array(
            'zone_id' => $this->input->post('zone_id'),
            'zone_name' => $this->input->post('zone_name')
        );


        if ($this->db->insert('zone', $data)) {
            $status['code'] = 0;
            $status['message'] = 'New Zone Added Successfully';
        } else {
            $status['code'] = $this->db->error()['code'];
            $status['message'] = 'Operation Failed: ' . $this->db->error()['message'];
        }
        return $status;
    }


}
