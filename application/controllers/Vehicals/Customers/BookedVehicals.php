<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BookedVehicals extends CI_Controller
{



    public function index()
    {
        $this->myBookings();
    }


    public function myBookings()
    {


        if ($this->session->userdata('currently_logged_in')) {

            //Get Current User
            $userId =  $this->session->userdata('username');
            // echo $userId;
            $this->load->model('Login_model');
            $user = $this->Login_model->getUser($userId);
            $UserId = $user['id'];
    

            //Get Vehicals
            $this->load->model('Vehicals_model');
            $getBookings = $this->Vehicals_model->getCustomersBookedVehicals($UserId);
            $data = array();
            $data['getBookings'] = $getBookings;
            $data['user'] = $user;


            // print_r($getBookings);

            $this->load->view('Vehicals/Customers/bookedVehicals', $data);
        // } else {
        //     redirect('Users/login');

        }
    }
}