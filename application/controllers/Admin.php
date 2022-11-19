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
            'title' => 'Dashboard',
            'jmlUser' => $this->ModelUser->cekUser(['role_id' => 3])->num_rows()
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
            'title' => 'Data User',
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


    public function tambahUser()
    {
        $data = [
            'title' => 'Tambah User'
        ];

        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/tambahUser', $data);
        $this->load->view('templates/admin_footer');
    }
    public function editUser($id)
    {

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
            'required' => 'Nama belum diisi!!!'
        ]);
        $this->form_validation->set_rules('role_id', 'Role ID', 'required', [
            'required' => 'Role belum diisi!!!'
        ]);

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Edit User',
                'user' => $this->ModelUser->getIdUser($id)
            ];

            $this->load->view('templates/admin_header', $data);
            $this->load->view('admin/topbar', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/editUser', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $email = $this->input->post('email');
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'image' => $this->input->post('image'),
                'password' => $this->input->post('password'),
                'role_id' => $this->input->post('role_id'),
                'is_active' => $this->input->post('is_active'),
                'date_created' => $this->input->post('date_created')
            ];

            $this->ModelUser->editUser_proses($data);
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-1"></i>
                    <b>Sukses!</b> Data telah diubah.
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
            redirect('admin/lihatUser');
        }
    }



    public function hapusUser($id)
    {
        $this->ModelUser->hapusUser($id);
        redirect('admin/lihatUser');
    }
}
