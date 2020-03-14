<?php

class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->register();
    }

    public function register()
    {
        $this->form_validation->set_rules('username', 'ユーザー名', 'trim|required|alpha|min_length[3]|max_length[50]');
        $this->form_validation->set_rules('email', 'メールアドレス', 'trim|required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'パスワード', 'trim|required|matches[cpassword]');
        $this->form_validation->set_rules('cpassword', 'パスワード再入力', 'trim|required');
        $data['title'] = 'Register';

        if($this->form_validation->run() === FALSE){
            $this->load->view('register');
        }else{
            if($this->user_model->set_user()){
                $this->session->set_flashdata('msg_success', 'Registration Successful!');
                redirect('user/login');
            }else{
                $this->session->set_flashdata('msg_error', 'Error! Please try again later.');
                redirect('user/register');
            }
        }
    }

    public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|md5');

        if($this->form_validation->run() == FALSE)
        {
            $this->load->view('login');
        }else{
            if($user = $this->user_model->get_user_login($email, $password))
            {
                $this->session->set_userdata('email', $email);
                $this->session->set_userdata('id', $user['id']);
                $this->session->set_userdata('is_logged_in', true);

                $this->load->view('logout');
            }else{
                $this->session->set_flashdata('msg_error', 'Login credentials does match!');
                redirect('user/login');
            }
        }
    }

    public function logout()
    {
        if ($this->session->userdata('is_logged_in') == true){
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('is_logged_in');
            $this->session->unset_userdata('id');

            $this->load->view('login');
        }else{
            redirect(base_url());
        }
    }
    
}