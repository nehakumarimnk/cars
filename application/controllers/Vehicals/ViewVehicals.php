<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ViewVehicals extends CI_Controller
{



    public function index()
    {
        $this->view();
    }

    public function view()
    {


        // if ($this->session->userdata('currently_logged_in')) {

            //Get Current User
            $userId =  $this->session->userdata('username');
            // echo $userId;
            $this->load->model('Login_model');
            $user = $this->Login_model->getUser($userId);
    

            //Get Vehicals
            $this->load->model('Vehicals_model');
            $getVehicals = $this->Vehicals_model->getUserVehicals();
            $data = array();
            $data['getVehicals'] = $getVehicals;
            $data['user'] = $user;


            // print_r($getVehicals);

            $this->load->view('Vehicals/viewVehicals', $data);
        // } else {
        //     redirect('Users/login');

        // }
    }

    public function mycars()
    {


        if ($this->session->userdata('currently_logged_in')) {

            //Get Current User
            $userId =  $this->session->userdata('username');
            // echo $userId;
            $this->load->model('Login_model');
            $user = $this->Login_model->getUser($userId);
            $AgencyId = $user['id'];
    

            //Get Vehicals
            $this->load->model('Vehicals_model');
            $getVehicals = $this->Vehicals_model->getMyAgencyVehicals($AgencyId);
            $data = array();
            $data['getVehicals'] = $getVehicals;
            $data['user'] = $user;


            // print_r($getVehicals);

            $this->load->view('Vehicals/Agency/viewMyVehicals', $data);
        // } else {
        //     redirect('Users/login');

        }
    }
}