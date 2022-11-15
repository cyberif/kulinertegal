<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];

        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    function lihatUser()
    {
        $data = [
            'title' => 'Lihat User',
            //menampilkan user sesuai role
            'user' => $this->ModelUser->cekUser(['role_id' => 3])->result_array(),
            'jmlUser' => $this->ModelUser->cekUser(['role_id' => 3])->num_rows()
        ];
        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/lihatUser', $data);
        $this->load->view('templates/admin_footer');
    }
}
