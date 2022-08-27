<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BookVehicals extends CI_Controller
{


    function create($cid)
    {

        // echo $cid;

        if ($this->session->userdata('currently_logged_in')) {

            //Get Current Master User
            $current_user =  $this->session->userdata('username');
            // echo $current_id;
            $this->load->model('Login_model');
            $users = $this->Login_model->getUser($current_user);

            $this->load->model('Vehicals_model');



            $this->form_validation->set_rules('t_days', 't_days', 'required');


            $data = array();
            $data['users'] = $users;
            $user_id = $data['users']['id'];

            // echo $user_id;

            $getVehicals = $this->Vehicals_model->getSelectedVehicals($cid);
            $data = array();
            $data['getVehicals'] = $getVehicals;

            // print_r($data['getVehicals']);

            $bookingUserId =  $data['getVehicals'][0]['user_id'];

            if ($this->form_validation->run() == false) {

                $this->load->view('Vehicals/Customers/bookVehicals', $data);
            } else {

                $formArray = array();
                $formArray['t_days'] = $this->input->post('t_days');
                $formArray['s_day'] = $this->input->post('s_day');

                $formArray['car_id'] = $cid;
                $formArray['customer_id'] = $user_id;

                $formArray['agency_id'] = $bookingUserId;




                // print_r($data);
                $this->Vehicals_model->createbookings($formArray);

                // $this->session->set_flashdata('success', 'Record added successfully!');



                redirect('Users/data');
            }
        } else {
            redirect('Users/login');
        }
    }
}
