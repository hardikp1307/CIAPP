<?php

class Register extends CI_Controller{
    private $validation_errors;

    public function __construct() {
        parent::__construct();

        $this->load->helper('form');     
        $this->load->model('register_Model', 'register');                   
    }

    public function index(){
        if(!$this->session->has_userdata('is_logged_in') || $this->session->is_logged_in != "1") {
            $data = array(
                'title' => 'Register',
                'submit_url' => 'register/registerMember', 
                'is_loggedin' => false,               
            );
            $this->load->view('templates/header', $data);
            $this->load->view('pages/register', $data);
            $this->load->view('templates/footer');
        } else {
            echo "user logged in";
        }
       // die;
    }

    public function registerMember() {
        $this->form_validation->set_rules('firstname', 'First name', 'required|min_length[2]');
        $this->form_validation->set_rules('lastname', 'Last name', 'required|min_length[2]');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[10]');
        $this->form_validation->set_rules('conf_password', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');

        if($this->form_validation->run() == FALSE) {
            
            $data = array(
                'title' => 'Register',
                'submit_url' => 'register/registerMember', 
                'is_loggedin' => false,                            
            );
            $this->load->view('templates/header', $data);
            $this->load->view('pages/register', $data);
            $this->load->view('templates/footer');
        } else {
            $this->register->registerMember($this->input->post());
            //echo "User registered successfully";
            $this->redirect('login');
        } 
    }    
}