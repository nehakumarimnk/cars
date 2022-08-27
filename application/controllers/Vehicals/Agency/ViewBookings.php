<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ViewBookings extends CI_Controller
{



    public function index()
    {
        $this->view();
    }

    public function view()
    {

    

        if ($this->session->userdata('currently_logged_in')) {

            //Get Current User
            $userId =  $this->session->userdata('username');
            // echo $userId;
            $this->load->model('Login_model');
            $user = $this->Login_model->getUser($userId);

            // print_r($user['id']);
            $AgencyId = $user['id'];

            //Get Booked Vehicals
            $this->load->model('Vehicals_model');
            $getBookedVehicals = $this->Vehicals_model->getAgencyBookedVehicals($AgencyId);
            $data = array();
            $data['getBookedVehicals'] = $getBookedVehicals;
            $data['user'] = $user;


            // print_r($getBookedVehicals);

            $this->load->view('Vehicals/Agency/viewBookings', $data);
        } else {
            redirect('Users/login');
        }
    }
}
