<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EditVehicals extends CI_Controller
{

    function edit($cid)
    {

        //Check User
        if ($this->session->userdata('currently_logged_in')) {


            //Get Current User
            $userId =  $this->session->userdata('username');
            $this->load->model('Login_model');
            $users = $this->Login_model->getUser($userId);


            //Load Model
            $this->load->model('Vehicals_model');
            $getVehicals = $this->Vehicals_model->getSelectedVehicals($cid);


            $data = array();
            $data['getVehicals'] = $getVehicals;
            $data['users'] = $users;
            $user_id = $data['users']['id'];
            // print_r($getVehicals);

            $this->form_validation->set_rules('v_name', 'v_name', 'required');

            if ($this->form_validation->run() == false) {

                $this->load->view('Vehicals/Agency/editVehicals', $data);
            } else {

                $formArray = array();
                $formArray['v_name'] = $this->input->post('v_name');
                $formArray['v_model'] = $this->input->post('v_model');
                $formArray['v_number'] = $this->input->post('v_number');

                $formArray['seating_capacity'] = $this->input->post('seating_capacity');
                $formArray['rent_per_day'] = $this->input->post('rent_per_day');
                $formArray['user_id'] = $user_id;

                $this->Vehicals_model->updateVehical($cid, $formArray);
                // $this->session->set_flashdata('success','Record update successfully');
                redirect('Users/data');
            }
        } else {
            redirect('Users/login');
        }
    }


    function delete($cid)
    {
        $this->load->model('Vehicals_model');
        if ($this->session->userdata('currently_logged_in')) {

            //Get Current User
            $current_user =  $this->session->userdata('username');



            $this->Vehicals_model->deleteVehical($cid);

            $this->session->set_flashdata('Success', 'Record Deleted From database');
           
                redirect('Users/data');
        } else {
            redirect('Users/login');
        }
    }
}
