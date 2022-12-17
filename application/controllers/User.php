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
            'user' => $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(),
            'foodsnbevs' => $this->ModelWarung->warungLimit(['id_wkategori' => 1])->result_array(),
            'foods' => $this->ModelWarung->warungLimit(['id_wkategori' => 2])->result_array(),
            'beverages' => $this->ModelWarung->warungLimit(['id_wkategori' => 3])->result_array()
        ];

        $this->load->view('templates/user_header', $data);
        $this->load->view('user/index', $data);
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

    function warung()
    {
        $data = [
            'title' => 'Warung',
            'user' => $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array(),
            'lihatwarung' => $this->ModelWarung->tampilWarung()
        ];

        $this->load->view('templates/user_header', $data);
        $this->load->view('user/warung', $data);
        $this->load->view('templates/user_footer');
    }

    function menu($id)
    {
        $data = [
            'title' => 'Menu',
            'warung' => $this->ModelWarung->warungWhereRow(['id' => $id]),
            'menu' => $this->ModelMenu->getMenu(['id_warung' => $id]),
            'paket' => $this->ModelPaket->getPaket(['id_warung' => $id]),
            'jmlMenu' => $this->ModelMenu->jmlMenu(['id_warung' => $id]),
            'jmlPaket' => $this->ModelPaket->jmlPaket(['id_warung' => $id])
        ];

        $this->load->view('templates/user_header', $data);
        $this->load->view('user/menu', $data);
        $this->load->view('templates/user_footer');
    }

    public function profile()
    {
        $email = $this->session->userdata('email');
        $data = [
            'title' => 'Profile',
            'user' => $this->ModelUser->cekUser(['email' => $email])->row_array()
        ];

        $this->load->view('templates/user_header', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('templates/user_footer');
    }
}
