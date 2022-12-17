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
        $email = $this->session->userdata('email');
        $data = [
            'title' => 'Warung',
            'topbar' => $this->ModelUser->cekUser(['email' => $email])->row_array(),
            'jmlMenu' => $this->ModelMenu->jmlMenu(['email' => $email]),
            'jmlPaket' => $this->ModelPaket->jmlPaket(['email' => $email])
        ];
        $this->load->view('templates/warung_header', $data);
        $this->load->view('warung/topbar', $data);
        $this->load->view('warung/sidebar', $data);
        $this->load->view('warung/index', $data);
        $this->load->view('templates/warung_footer');
    }
    //MENU
    public function tambahMenu()
    {
        $this->form_validation->set_rules('nama', 'Nama Menu', 'required|is_unique[wmenu.nama]', [
            'required' => 'Nama harus diisi!',
            'is_unique' => 'Menu Sudah Ada!!'
        ]);
        $this->form_validation->set_rules('harga', 'Harga Menu', 'required', [
            'required' => 'Harga harus diisi!',
        ]);

        if ($this->form_validation->run() == false) {
            $email = $this->session->userdata('email');
            $data = [
                'title' => 'Tambah Menu',
                'topbar' => $this->ModelUser->cekUser(['email' => $email])->row_array(),
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
                'email' => htmlspecialchars($this->input->post('email'))
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

    function lihatMenu()
    {
        $email = $this->session->userdata('email');
        $data = [
            'title' => 'Lihat Menu',
            'topbar' => $this->ModelUser->cekUser(['email' => $email])->row_array(),
            'menu' => $this->ModelMenu->getMenu(['email' => $email]),
            'jmlMenu' => $this->ModelMenu->jmlMenu(['email' => $email])
        ];
        $this->load->view('templates/warung_header', $data);
        $this->load->view('warung/topbar', $data);
        $this->load->view('warung/sidebar', $data);
        $this->load->view('warung/lihatMenu', $data);
        $this->load->view('templates/warung_footer');
    }

    public function hapusMenu($id)
    {
        $this->ModelMenu->hapusMenu($id);
        $this->session->set_flashdata(
            'pesan',
            '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                <b>Sukses!</b> Data telah dihapus.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
        redirect('warung/lihatMenu');
    }
    //END MENU
    //PAKET
    public function tambahPaket()
    {
        $this->form_validation->set_rules('nama', 'Nama Paket', 'required|is_unique[wpaket.nama]', [
            'required' => 'Nama harus diisi!',
            'is_unique' => 'Paket Sudah Ada!!'
        ]);
        $this->form_validation->set_rules('rincian', 'Rincian Paket', 'required', [
            'required' => 'Rincian harus diisi!',
        ]);
        $this->form_validation->set_rules('harga', 'Harga Paket', 'required', [
            'required' => 'Harga harus diisi!',
        ]);

        if ($this->form_validation->run() == false) {
            $email = $this->session->userdata('email');
            $data = [
                'title' => 'Tambah Paket',
                'topbar' => $this->ModelUser->cekUser(['email' => $email])->row_array(),
                'warung' => $this->ModelUser->cekUser(['email' => $email])->row_array()
            ];

            $this->load->view('templates/warung_header', $data);
            $this->load->view('warung/topbar', $data);
            $this->load->view('warung/sidebar', $data);
            $this->load->view('warung/tambahPaket', $data);
            $this->load->view('templates/warung_footer');
        } else {
            $data = [
                'id_warung' => htmlspecialchars($this->input->post('id_warung')),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'rincian' => htmlspecialchars($this->input->post('rincian', true)),
                'harga' => htmlspecialchars($this->input->post('harga', true)),
                'email' => htmlspecialchars($this->input->post('email'))
            ];

            $this->ModelPaket->tambahPaket($data);

            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                <b>Sukses!</b> Paket baru telah ditambahkan.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
            );
            redirect('warung/lihatPaket');
        }
    }

    function lihatPaket()
    {
        $email = $this->session->userdata('email');
        $data = [
            'title' => 'Lihat Paket',
            'topbar' => $this->ModelUser->cekUser(['email' => $email])->row_array(),
            'paket' => $this->ModelPaket->getPaket(['email' => $email]),
            'jmlPaket' => $this->ModelPaket->jmlPaket(['email' => $email])
        ];
        $this->load->view('templates/warung_header', $data);
        $this->load->view('warung/topbar', $data);
        $this->load->view('warung/sidebar', $data);
        $this->load->view('warung/lihatPaket', $data);
        $this->load->view('templates/warung_footer');
    }

    public function hapusPaket($id)
    {
        $this->ModelPaket->hapusPaket($id);
        $this->session->set_flashdata(
            'pesan',
            '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                <b>Sukses!</b> Paket telah dihapus.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
        redirect('warung/lihatPaket');
    }
    //END PAKET

    public function profile()
    {
        $email = $this->session->userdata('email');
        $data = [
            'title' => 'Profile',
            'topbar' => $this->ModelUser->cekUser(['email' => $email])->row_array(),
            'user' => $this->ModelUser->cekUser(['email' => $email])->row_array()

        ];
        $this->load->view('templates/warung_header', $data);
        $this->load->view('warung/topbar', $data);
        $this->load->view('warung/sidebar', $data);
        $this->load->view('warung/profile', $data);
        $this->load->view('templates/warung_footer');
    }
}
