<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    function index()
    {
        $data = [
            'title' => 'Home Page',
            'user' => $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array()
        ];

        $this->load->view('templates/user_header', $data);
        $this->load->view('user/index');
        $this->load->view('templates/user_footer');
    }

    function aboutus()
    {
        $data = [
            'title' => 'About Us',
        ];

        $this->load->view('templates/user_header', $data);
        $this->load->view('user/aboutus');
        $this->load->view('templates/user_footer');
    }
}
