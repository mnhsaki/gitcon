
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('app_model');
    }

    //client div
    public function add_new_div() {

        $this->load->model('division_model');
        $data = '';
        $this->form_validation->set_rules('division_name', 'DivisionName', 'required');
        $this->form_validation->set_rules('division_id', 'Division ID', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('pages/settings/div/add_new_div', $data);
            //$this->session->set_flashdata("success", "Your division has been registered");
            //redirect("pages/settings/div/list_of_div", "refresh");	
        } else {
            $data['status'] = $status = $this->division_model->insert();
            if ($status['code'] == 0) {
                $data['query'] = $this->division_model->get_all();
                $this->load->view('pages/settings/div/list_of_div', $data);
            } else {
                $this->load->view('pages/settings/div/add_new_div', $data);
            }
        }
    }

    public function list_of_div() {
        $this->load->model('division_model');
        $data['query'] = $this->division_model->get_all();
        $this->load->view('pages/settings/div/list_of_div', $data);
    }

    //zone
    public function add_new_zone() {
        $this->load->model('division_model');
        $this->load->model('zone_model');
        $data['divisions'] = $this->division_model->get_list();

        $this->form_validation->set_rules('division_no', 'Division Name', 'required');
        $this->form_validation->set_rules('zone_id', 'Zone ID', 'required');
        $this->form_validation->set_rules('zone_name', 'Zone Name', 'required');

        if ($this->form_validation->run() == FALSE) {
            
        } else {
            $data['status'] = $status = $this->zone_model->insert();
        }
        $this->load->view('pages/settings/zone/add_new_zone', $data);
    }

    public function temp() {
        $this->load->model('division_model');
        $this->load->model('zone_model');
        $data['divisions'] = $this->division_model->get_list();

        $this->form_validation->set_rules('division_no', 'Division Name', 'required');
        $this->form_validation->set_rules('zone_id', 'Zone ID', 'required');
        $this->form_validation->set_rules('zone_name', 'Zone Name', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('pages/settings/zone/add_new_zone', $data);
        } else {
            $data['status'] = $status = $this->zone_model->insert();
            if ($status['code'] == 0) {
                $data['rows'] = $this->zone_model->get_all();
                $this->load->view('pages/settings/zone/list_of_zone', $data);
            } else {
                $this->load->view('pages/settings/zone/add_new_zone', $data);
            }
        }
    }

    public function list_of_zone() {
        $this->load->model('zone_model');
        $data['rows'] = $this->zone_model->get_all_with_division();
        $this->load->view('pages/settings/zone/list_of_zone', $data);
    }

    //Area
    public function add_new_area() {


        $this->form_validation->set_rules('division_no', 'division name', 'required');
        $this->form_validation->set_rules('zone_no', 'zone no', 'required');
        $this->form_validation->set_rules('area_name', 'Area Name', 'required');
        if ($this->form_validation->run() == TRUE) {
            $db_data = array(
                'division_no' => $this->input->post('division_no'),
                'zone_no' => $this->input->post('zone_no'),
                'area_name' => $this->input->post('area_name')
            );
            $data['status'] = $this->app_model->insert_data('area', $db_data);
        }


        $data['division'] = $this->app_model->get_all('division');
        $data['zone'] = $this->app_model->get_all('zone');
        $this->load->view('pages/settings/area/add_new_area', $data);
    }

    public function list_of_area() {
        $sql = "select * from area a,zone z,division d where a.zone_no=z.zone_no and z.division_no=d.division_no";
        $data['rows'] = $this->app_model->get_query($sql);
        $this->load->view('pages/settings/area/list_of_area', $data);
    }

    //Sales Manager
    public function add_new_sales_manager() {
        $this->form_validation->set_rules('division_no', 'division name', 'required');
        $this->form_validation->set_rules('zone_no', 'zone no', 'required');
        $this->form_validation->set_rules('area_no', 'Area Name', 'required');
        $this->form_validation->set_rules('sales_manager_id', 'Sales Manager ID', 'required');
        $this->form_validation->set_rules('sales_manager_name', 'Sales Manager Name', 'required');

        if ($this->form_validation->run() == TRUE) {
            $db_data = array(
//                'division_no' => $this->input->post('division_no'),
//                'zone_no' => $this->input->post('zone_no'),
                'area_no' => $this->input->post('area_no'),
                'sales_manager_id' => $this->input->post('sales_manager_id'),
                'sales_manager_name' => $this->input->post('sales_manager_name'),
                'sales_manager_email' => $this->input->post('sales_manager_email'),
                'sales_manager_phone_number' => $this->input->post('sales_manager_number'),
                'sales_manager_nid' => $this->input->post('sales_manager_nid'),
                'sales_manager_address' => $this->input->post('sales_manager_address'),
                'sales_manager_note' => $this->input->post('sales_manager_note')
            );
            $data['status'] = $this->app_model->insert_data('sales_manager', $db_data);
        }

        $data['division'] = $this->app_model->get_all('division');

        $this->load->view('pages/settings/SalesManager/add_new_sales_manager', $data);
    }

    public function list_of_sales_manager() {
        $sql = 'select * from sales_manager s,area a,zone z,division d where '
                . 's.area_no=a.area_no and a.zone_no=z.zone_no and z.division_no=d.division_no';
        $data['rows'] = $this->app_model->get_query($sql); //get_all('sales_manager');
        $this->load->view('pages/settings/SalesManager/list_of_sales_manager', $data);
    }

    //team leader
    public function add_new_team_leader() {


        $this->form_validation->set_rules('teamleaderid', 'ID', 'required');
        $this->form_validation->set_rules('sales_manager_no', 'Sales Manager', 'required');
        $this->form_validation->set_rules('teamleadername', 'Team Leader Name', 'required');
        $this->form_validation->set_rules('teamleadernumber', 'Phone Number', 'required');

        if ($this->form_validation->run() == TRUE) {
            $db_data = array(
                'team_leader_id' => $this->input->post('teamleaderid'),
                'sales_manager_no' => $this->input->post('sales_manager_no'),
                'team_leader_name' => $this->input->post('teamleadername'),
                'team_leader_email' => $this->input->post('teamleadermail'),
                'team_leader_phone_number' => $this->input->post('teamleadernumber'),
                'team_leader_nid' => $this->input->post('tnid'),
                'team_leader_address' => $this->input->post('teamleaderaddress'),
                'team_leader_note' => $this->input->post('teamleadernote')
            );
            $data['status'] = $this->app_model->insert_data('team_leader', $db_data);
        }



        $data['rows'] = $this->app_model->get_all('sales_manager');
        $data['admin_main_content'] = $this->load->view('pages/settings/teamleader/add_new_team_leader', $data);
    }

    public function list_of_team_leader() {
        $sql = 'select * from team_leader tl,sales_manager sm,area a,zone z,division d '
                . 'where tl.sales_manager_no=sm.sales_manager_no'
                . ' and sm.area_no=a.area_no'
                . ' and a.zone_no=z.zone_no'
                . ' and z.division_no=d.division_no';

        $data['rows'] = $this->app_model->get_query($sql); //$this->app_model->get_all('team_leader');

        $this->load->view('pages/settings/teamleader/list_of_team_leader', $data);
    }

    //team member
    public function add_new_team_member() {
        $this->form_validation->set_rules('teammemberid', 'ID', 'required');
        $this->form_validation->set_rules('team_leader_no', 'Team Leader', 'required');
        $this->form_validation->set_rules('teammembername', 'Team Member Name', 'required');
        $this->form_validation->set_rules('teammembernumber', 'Phone Number', 'required');

        if ($this->form_validation->run() == TRUE) {
            $db_data = array(
                'team_member_id' => $this->input->post('teammemberid'),
                'team_leader_no' => $this->input->post('team_leader_no'),
                'team_member_name' => $this->input->post('teammembername'),
                'team_member_email' => $this->input->post('teammembermail'),
                'team_member_phone_number' => $this->input->post('teammembernumber'),
                'team_member_nid' => $this->input->post('tnid'),
                'team_member_address' => $this->input->post('teammemberaddress'),
                'team_member_note' => $this->input->post('teammembernote')
            );
            $data['status'] = $this->app_model->insert_data('team_member', $db_data);
        }



        $data['rows'] = $this->app_model->get_all('team_leader');
        $this->load->view('pages/settings/TeamMember/add_new_team_member', $data);
    }

    public function list_of_team_member() {
        $sql='select * from team_member tm,team_leader tl'
                . ' where tm.team_leader_no=tl.team_leader_no';
        $data['rows'] = $this->app_model->get_query($sql);
        $this->load->view('pages/settings/TeamMember/list_of_team_member', $data);
        
    }

    public function profile() {
        $data = array();
        $data['admin_main_content'] = $this->load->view('pages/settings/profile/admin_profile', '', true);
        $this->load->view('main_layout', $data);
    }

}
