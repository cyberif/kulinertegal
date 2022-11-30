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
            'jmlUser' => $this->ModelUser->cekUser(['role_id' => 3])->num_rows(),
            'jmlUserWarung' => $this->ModelUser->cekUser(['role_id' => 2])->num_rows(),
            'jmlWarung' => $this->ModelWarung->jmlWarung()
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
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
            'required' => 'Nama belum diisi!!!'
        ]);

        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email|is_unique[user.email]', [
            'valid_email' => 'Email salah!!!',
            'required' => 'Email belum diisi!!!',
            'is_unique' => 'Email sudah terdaftar!!'
        ]);

        $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[3]|matches[password2]', [
            'required' => 'Password belum diisi!!!',
            'min_length' => 'Password pendek!',
            'matches' => 'Password tidak sama!'
        ]);

        $this->form_validation->set_rules('password2', 'password', 'required|trim|min_length[3]|matches[password1]', [
            'required' => 'Password belum diisi!!!',
            'min_length' => 'Password pendek!',
            'matches' => 'Password tidak sama!'
        ]);

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Tambah User'
            ];

            $this->load->view('templates/admin_header', $data);
            $this->load->view('admin/topbar', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/tambahUser', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash(
                    $this->input->post('password1'),
                    PASSWORD_DEFAULT
                ),
                'role_id' => 3,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->ModelUser->simpanData($data);

            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                <b>Sukses!</b> User baru telah ditambahkan.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
            );
            redirect('admin/lihatUser');
        }
    }

    public function tambahWarung()
    {
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
            'required' => 'Nama belum diisi!!!'
        ]);

        $this->form_validation->set_rules('email', 'Alamat Email', 'required|trim|valid_email|is_unique[user.email]', [
            'valid_email' => 'Email salah!!!',
            'required' => 'Email belum diisi!!!',
            'is_unique' => 'Email sudah terdaftar!!'
        ]);

        $this->form_validation->set_rules('password1', 'password', 'required|trim|min_length[3]|matches[password2]', [
            'required' => 'Password belum diisi!!!',
            'min_length' => 'Password pendek!',
            'matches' => 'Password tidak sama!'
        ]);

        $this->form_validation->set_rules('password2', 'password', 'required|trim|min_length[3]|matches[password1]', [
            'required' => 'Password belum diisi!!!',
            'min_length' => 'Password pendek!',
            'matches' => 'Password tidak sama!'
        ]);

        if ($this->form_validation->run() == false) {
            $data = [
                'title' => 'Tambah Warung'
            ];

            $this->load->view('templates/admin_header', $data);
            $this->load->view('admin/topbar', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/tambahWarung', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash(
                    $this->input->post('password1'),
                    PASSWORD_DEFAULT
                ),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->ModelUser->simpanData($data);

            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                <b>Sukses!</b> Warung baru telah ditambahkan.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
            );
            redirect('admin/lihatWarung');
        }
    }

    public function editUser($id)
    {

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
            'required' => 'Nama belum diisi!!!'
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
        $this->session->set_flashdata(
            'pesan',
            '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                <b>Sukses!</b> Data telah dihapus.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
        redirect('admin/lihatUser');
    }

    function lihatWarung()
    {
        $data = [
            'title' => 'Data User Warung',
            //menampilkan user sesuai role
            'user' => $this->ModelUser->cekUser(['role_id' => 2])->result_array(),
            'jmlUser' => $this->ModelUser->cekUser(['role_id' => 2])->num_rows()
        ];
        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/lihatWarung', $data);
        $this->load->view('templates/admin_footer');
    }

    function dataWarung()
    {
        $data = [
            'title' => 'Data Warung',
            'warung' => $this->ModelWarung->tampilWarung(),
            'jmlWarung' => $this->ModelWarung->jmlWarung()
        ];
        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/dataWarung', $data);
        $this->load->view('templates/admin_footer');
    }

    public function profile()
    {
        $email = $this->session->userdata('email');
        $data = [
            'title' => 'Profile',
            'user' => $this->ModelUser->cekUser(['email' => $email])->row_array()
        ];

        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('templates/admin_footer');
    }
}
