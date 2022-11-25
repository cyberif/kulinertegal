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
            'title' => 'Warung'
        ];
        $this->load->view('templates/warung_header', $data);
        $this->load->view('warung/topbar');
        $this->load->view('warung/sidebar');
        $this->load->view('warung/index');
        $this->load->view('templates/warung_footer');
    }
    public function tambahMenu()
    {
        $this->form_validation->set_rules('nama', 'Nama Menu', 'required|is_unique[wmenu.nama]', [
            'required' => 'ISI BLOG !!!',
            'is_unique' => 'Menu Sudah Ada!!'
        ]);
        $this->form_validation->set_rules('harga', 'harga Menu', 'required', [
            'required' => 'ISI BLOG !!!',
        ]);

        if ($this->form_validation->run() == false) {
            $email = $this->session->userdata('email');
            $data = [
                'title' => 'Tambah Menu',
                'warung' => $this->ModelUser->cekUser(['email' => $email])->row_array()
            ];

            $this->load->view('templates/warung_header', $data);
            $this->load->view('warung/topbar', $data);
            $this->load->view('warung/sidebar', $data);
            $this->load->view('warung/tambahMenu', $data);
            $this->load->view('templates/warung_footer');
        } else {
            $data = [
                'id_warung' => htmlspecialchars($this->input->post('id_warung')),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'harga' => htmlspecialchars($this->input->post('harga', true)),
            ];

            $this->ModelMenu->tambahMenu($data);

            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                <b>Sukses!</b> Menu baru telah ditambahkan.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
            );
            redirect('warung/lihatMenu');
        }
    }


    public function profile()
    {
        $email = $this->session->userdata('email');
        $data = [
            'title' => 'Profile',
            'user' => $this->ModelUser->cekUser(['email' => $email])->row_array()

        ];
        $this->load->view('templates/warung_header', $data);
        $this->load->view('warung/topbar');
        $this->load->view('warung/sidebar');
        $this->load->view('warung/profile');
        $this->load->view('templates/warung_footer');
    }

    function lihatMenu()
    {
        $data = [
            'title' => 'Lihat Menu'
        ];
        $this->load->view('templates/warung_header', $data);
        $this->load->view('warung/topbar');
        $this->load->view('warung/sidebar');
        $this->load->view('warung/lihatMenu');
        $this->load->view('templates/warung_footer');
    }
}
