<?php

class User_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function set_user()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password'))
        );
        return $this->db->insert('user', $data);
    }

    public function get_user_login($email, $password)
    {
        $query = $this->db->get_where('user', array('email' => $email, 'password' => md5($password)));
        return $query->row_array();
    }

}