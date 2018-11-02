<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller { 

    public function __construct() {
        parent::__construct();
        $this->load->model('app_model');
    }

    public function get_zone_info($division_no){
        $rows=$this->app_model->get_by_key('zone', 'division_no', $division_no) ;
        $val='<option value="">Select Zone</option>';
        foreach ($rows as $value) {
            $val.='<option value="'.$value['zone_no'].'">'.$value['zone_name'].'</option>';
        }
        echo $val;
//        $this->output->set_content_type('application/json')->set_output(json_encode($rows));
    }
    
    public function get_area_info($zone_no){
        $rows=$this->app_model->get_by_key('area', 'zone_no', $zone_no) ;
        $val='<option value="">Select Area</option>';
        foreach ($rows as $value) {
            $val.='<option value="'.$value['area_no'].'">'.$value['area_name'].'</option>';
        }
        echo $val;

    }
    

}
