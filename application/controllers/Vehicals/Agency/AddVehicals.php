<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AddVehicals extends CI_Controller
{



    public function index()
    {
        $this->create();
    }

    function create()
    {

        if ($this->session->userdata('currently_logged_in')) {

            //Get Current Master User
            $current_user =  $this->session->userdata('username');
            // echo $current_id;
            $this->load->model('Login_model');
            $users = $this->Login_model->getUser($current_user);

            $this->load->model('Vehicals_model');



            $this->form_validation->set_rules('v_name', 'v_name', 'required');


            $data = array();
            $data['users'] = $users;
            $user_id = $data['users']['id'];
            if ($this->form_validation->run() == false) {

                $this->load->view('Vehicals/Agency/addVehicals', $data);
            } else {

                $formArray = array();
                $formArray['v_name'] = $this->input->post('v_name');
                $formArray['v_model'] = $this->input->post('v_model');
                $formArray['v_number'] = $this->input->post('v_number');

                $formArray['seating_capacity'] = $this->input->post('seating_capacity');
                $formArray['rent_per_day'] = $this->input->post('rent_per_day');
                $formArray['user_id'] = $user_id;




                // print_r($data);
                $this->Vehicals_model->createVehicals($formArray);

                // $this->session->set_flashdata('success', 'Record added successfully!');



                redirect('Users/data');

            }
        } else {
            redirect('Users/login');
        }
    }
}
