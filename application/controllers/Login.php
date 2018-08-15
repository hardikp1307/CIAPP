<?php
    class Login extends CI_Controller {
        private $validate_errors;
        
        public function __construct() {
            parent::__construct();
    
            $this->load->helper('form');     
            $this->load->model('login_Model', 'login');            
        }

        public function index(){
            //$this->session->is_logged_in = "0";
            if(!isset($this->session->is_logged_in) || $this->session->is_logged_in != "1"){
                $data = array(
                    'title' => 'Login',
                    'submit_url' => 'login/loginCheck', 
                    'is_loggedin' => false,
                );
                $this->load->view('templates/header', $data);
                $this->load->view('pages/login', $data);
                $this->load->view('templates/footer');
            } else {
                echo "logged in";
                //var_dump($this->session);
            }
            //die;
        }

        public function loginCheck(){

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if($this->form_validation->run() == FALSE){
                $data = array(
                    'title' => 'Login',
                    'submit_url' => 'login/loginCheck', 
                    'is_loggedin' => false,
                    'invalid_credentials' => true,
                );
                $this->load->view('templates/header', $data);
                $this->load->view('pages/login', $data);
                $this->load->view('templates/footer');
            } else {
                $response = $this->login->validateCredentials($this->input->post());
                if($response['success'] == true) {
                    $this->session->is_logged_in = "1";
                    $this->session->userdata['firstname'] = $response['firstname'];
                    $this->session->userdata['lastname'] = $response['lastname'];
                    $this->session->userdata['username'] = $response['username'];
                    $this->session->userdata['email'] = $response['email'];
                    $this->session->userdata['user_id'] = $response['id'];
                    var_dump($this->session->userdata());die;
                } else {
                    $data = array(
                        'title' => 'Login',
                        'submit_url' => 'login/loginCheck', 
                        'is_loggedin' => false,
                        'invalid_credentials' => true,
                    );
                    $this->load->view('templates/header', $data);
                    $this->load->view('pages/login', $data);
                    $this->load->view('templates/footer');
                }

            }
        }
    }

?>