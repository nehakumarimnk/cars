<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registers extends CI_Controller
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
            // echo $current_id;
            $this->load->model('Login_model');
            $user = $this->Login_model->getUser($userId);

            // $url = $user['url'];
            // print_r($user);

            //Get Classes for student
            // $this->load->model('schoola_model');
            // $getClass = $this->schoola_model->getClass($url);
            $data = array();
            $data['user'] = $user;

            $this->load->view('Main/dashboard', $data);
        } else {
            redirect('Register/Registers/create');
        }
    }

    function create()
    {

        $this->load->model('Register_model');

        $this->form_validation->set_rules('username', 'Username', 'required');
        // $this->form_validation->set_rules('Lirst_Name','Lirst_Name','required');

        if ($this->form_validation->run() == false) {

            $this->load->view('users/register');
        } else {

            $formArray = array();
            $formArray['username'] = $this->input->post('username');
            $formArray['password'] = $this->input->post('password');
            $formArray['role'] = $this->input->post('role');;
            $formArray['First_Name'] = $this->input->post('First_Name');
            $formArray['Last_Name'] = $this->input->post('Last_Name');
            $formArray['Gender'] = $this->input->post('Gender');
            // $formArray['Registration_Date'] = $this->input->post('Registration_Date');

            // print_r($data);
            
            $this->Register_model->createUser($formArray);

            $this->session->set_flashdata('item',$this->input->post('First_Name').' : You Have Been Registered Successfully!');
            redirect('Users/data'); 
        }
    }
}
