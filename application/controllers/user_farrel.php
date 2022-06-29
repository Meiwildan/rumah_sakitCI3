<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_farrel extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('googlemaps');
       
    }

    public function index()
    {
        $this->user_login_farrel->cek_login();
        $data = array(
            'title' => 'Data User Farrel',
            'map'   =>  $this->googlemaps->create_map(),
            'isi'   => 'user/v_list_farrel',
        );
        $this->load->view('template/v_wrapper_farrel', $data, FALSE);
    }
    public function login_farrel()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        
        if ($this->form_validation->run() == TRUE ) {
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $this->user_login_farrel->login_farrel($username, $password);
        } 
        
        
        $data = array(
            'title' => 'Login',
            'map'   =>  $this->googlemaps->create_map(),
            'isi'   => 'login_farrel',
        );
        $this->load->view('template/v_wrapper_farrel', $data, FALSE);
    }
    public function logout()
    {
        $this->user_login_farrel->logout();
    }
}

/* End of file User_farrel.php */
