<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_login_farrel
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->model('m_user');

    }
    public function login_farrel($username, $password)
    {
        $cek=$this->ci->m_user->login_farrel($username, $password);
        if ($cek) {
            $username=$cek->username;
            $nama_user=$cek->nama_user;
            
            
            $this->ci->session->set_userdata( 'username', $username );
            $this->ci->session->set_userdata( 'nama_user', $nama_user );
            redirect('home_farrel');
        }else{
            $this->ci->session->set_flashdata('pesan', 'Username Atau Password Tidak Cocok');
            redirect('user_farrel/login_farrel');
        }
    }
    public function cek_login()
    {
    if ($this->ci->session->userdata('username')=="") {
        $this->ci->session->set_flashdata('pesan', 'Anda Belum Login, silahkan login dulu');
        redirect('user_farrel/login_farrel');
    }
}

public function logout()
{
    $this->ci->session->unset_userdata('username');
    $this->ci->session->unset_userdata('password');
    $this->ci->session->set_flashdata('pesan', 'Logout Sukses');
    redirect('user_farrel/login_farrel');
}
    

}

/* End of file User_login_farrel.php */
