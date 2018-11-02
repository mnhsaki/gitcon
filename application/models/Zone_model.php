<?php

class Zone_model extends CI_Model {

    public function __construct() {
        
    }

    public function get_all() {
        $query = $this->db->get('zone');
        return $query->result_array();
    }
    public function get_all_with_division() {
        $this->db->select('z.*,d.*');
        $this->db->from('zone z, division d');

        $this->db->where('z.division_no=d.division_no');
//        $this->db->order_by('a.attribute_name');
        $query = $this->db->get();
        return $query->result_array();
        
        
        $query = $this->db->get('zone');
        return $query->result_array();
    }

    public function get_list() {
        $query = $this->db->get('zone');
        return $query->result_array();
    }

    public function insert() {
        $data = array(
            'zone_id' => $this->input->post('zone_id'),
            'zone_name' => $this->input->post('zone_name'),
            'division_no' => $this->input->post('division_no')
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

    public function select_division() {

        $query = "SELECT division_name FROM division ORDER BY division_no";
        $result = mysql_query($query) or die(mysql_error() . "[" . $query . "]");
    }

}
