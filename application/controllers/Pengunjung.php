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
            'title' => "Home Page",
            'foodsnbevs' => $this->ModelWarung->warungLimit(['id_wkategori' => 1])->result_array(),
            'foods' => $this->ModelWarung->warungLimit(['id_wkategori' => 2])->result_array(),
            'beverages' => $this->ModelWarung->warungLimit(['id_wkategori' => 3])->result_array()
        ];
        $this->load->view('templates/pengunjung_header', $data);
        $this->load->view('pengunjung/index', $data);
        $this->load->view('templates/pengunjung_footer');
    }

    function aboutus()
    {
        $data['title'] = "About Us";
        $this->load->view('templates/pengunjung_header', $data);
        $this->load->view('pengunjung/aboutus');
        $this->load->view('templates/pengunjung_footer');
    }
}
