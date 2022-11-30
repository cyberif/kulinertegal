<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengunjung extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    function index()
    {
        $data = [
            'beverages' => $this->ModelWarung->warungWhere(['id_wkategori' => 3])
        ];
        $this->load->view('templates/pengunjung_header');
        $this->load->view('pengunjung/index', $data);
        $this->load->view('templates/pengunjung_footer');
    }

    function aboutus()
    {
        $this->load->view('templates/pengunjung_header');
        $this->load->view('pengunjung/aboutus');
        $this->load->view('templates/pengunjung_footer');
    }

    function kritik()
    {
        $this->load->view('templates/pengunjung_header');
        $this->load->view('pengunjung/kritik');
        $this->load->view('templates/pengunjung_footer');
    }
}
