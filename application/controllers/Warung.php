<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Warung extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    function index()
    {
        $data = [
            'title' => 'Warung - Kuliner tegal'
        ];
        $this->load->view('templates/warung_header', $data);
        $this->load->view('warung/topbar');
        $this->load->view('warung/sidebar');
        $this->load->view('warung/index');
        $this->load->view('templates/warung_footer');
    }
}
