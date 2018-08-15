<?php
    class Login_Model extends CI_Model{

        public function validateCredentials($data){
            $response = array();
            $response['success'] = false;
            $response['failure'] = false;
            if(!empty($data)) {
                $query = $this->db->get_where('users', array('username' => $data['username'], 'password' => $data['password']));
                $query_result = $query->row_array();
                $response['success'] = true;
                $response['firstname'] = $query_result['firstname'];
                $response['lastname'] = $query_result['lastname'];
                $response['email'] = $query_result['email'];
                $response['username'] = $query_result['username'];
                $response['id'] = $query_result['id'];
            } else {
                $response['failure'] = true;
            }
            return $response;
        }
    }
?>