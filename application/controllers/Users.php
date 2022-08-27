<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public function index()
    {
            // $this->load->view('Main/Alldashboard');
            $this->data();
    }



    public function data()
    {

        if ($this->session->userdata('currently_logged_in')) {

            //Get Current User
            $current_user =  $this->session->userdata('username');
            $this->load->model('Login_model');
            $users = $this->Login_model->getUser($current_user);
            $role = $users['role'];

            $data = array();
            $data['users'] = $users;
            $data['hello'] = $role;
            $this->load->view('Main/dashboard', $data);
        } else {
            $this->load->view('Main/Alldashboard');
        }
    }

    public function login()
    {
        $this->load->view('users/login_view');
    }

    public function invalid()
    {
        $this->load->view('users/invalid');
    }

    public function login_action()
    {

        $this->load->helper('security');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username:', 'required|trim|xss_clean|callback_validation');
        $this->form_validation->set_rules('password', 'Password:', 'required|trim|xss_clean|callback_validation');


        if ($this->form_validation->run()) {
            $data = array(
                'username' => $this->input->post('username'),
                'currently_logged_in' => 1
            );
            // print_r($data);
            $this->session->set_userdata($data);
            redirect('Users/data');
        } else {
            // echo "ELSE";
            $this->load->view('users/login_view');
        }
    }


    public function validation()
    {
        $this->load->model('login_model');

        if ($this->login_model->log_in_correctly()) {
            return true;
        } else {
            $this->form_validation->set_message('validation', 'Incorrect Username/Password');
            return false;
        }
    }


    

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Users/data');
    }
}
