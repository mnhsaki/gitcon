<?php

class Queries extends CI_Model {

    public function fetch_data() {
        $query = $this->db->get('division');
        return $query;
    }

}

?>