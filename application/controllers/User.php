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
            'title' => 'Home Page - Kuliner tegal',
            'user' => $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array()
        ];

        $this->load->view('templates/pengunjung_header', $data);
        $this->load->view('pengunjung/index');
        $this->load->view('templates/pengunjung_footer');
    }
}
