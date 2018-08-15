<?php

class Register_Model extends CI_Model{

    public function __construct(){
        parent::__construct();        
    }

    public function registerMember($data){
        //print_r($data);die;
        $values = array(
            'firstname' => $data['firstname'],
            'lastname'  => $data['lastname'],
            'email' => $data['email'],
            'username'  => $data['username'],
            'password'  => $data['password']
        );

        $query = $this->db->insert('users', $values);
        //print_r($query);
        return (($query) ? $this->db->affected_rows() : 0);
    }
}