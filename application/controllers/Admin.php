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
        $email = $this->session->userdata('email');
        $data = [
            'topbar' => $this->ModelUser->cekUser(['email' => $email])->row_array(),
            'title' => 'Dashboard',
            'jmlUser' => $this->ModelUser->cekUser(['role_id' => 3])->num_rows(),
            'jmlUserWarung' => $this->ModelUser->cekUser(['role_id' => 2])->num_rows(),
            'jmlWarung' => $this->ModelWarung->jmlWarung(),
            'user' => $this->ModelUser->cekUser(['role_id' => 3])->result_array(),
            'warung' => $this->ModelUser->cekUser(['role_id' => 2])->result_array()
        ];

        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/admin_footer', $data);
    }

    function lihatUser()
    {
        $email = $this->session->userdata('email');
        $data = [
            'topbar' => $this->ModelUser->cekUser(['email' => $email])->row_array(),
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
            $email = $this->session->userdata('email');
            $data = [
                'topbar' => $this->ModelUser->cekUser(['email' => $email])->row_array(),
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

    public function editUser($id)
    {

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
            'required' => 'Nama belum diisi!!!'
        ]);

        if ($this->form_validation->run() == false) {
            $email = $this->session->userdata('email');
            $data = [
                'topbar' => $this->ModelUser->cekUser(['email' => $email])->row_array(),
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
    public function jadikanWarung($id)
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'Nama belum diisi!'
        ]);
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
            'required' => 'Alamat belum diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $email = $this->session->userdata('email');
            $data = [
                'topbar' => $this->ModelUser->cekUser(['email' => $email])->row_array(),
                'title' => 'Jadikan Warung',
                'user' => $this->ModelUser->getIdUser($id)
            ];

            $this->load->view('templates/admin_header', $data);
            $this->load->view('admin/topbar', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/jadikan_warung', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $email = $this->input->post('email');
            $dataUser = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($email),
                'image' => $this->input->post('image'),
                'password' => $this->input->post('password'),
                'role_id' => 2,
                'is_active' => $this->input->post('is_active'),
                'date_created' => $this->input->post('date_created')
            ];

            $this->ModelUser->editUser_proses($dataUser);
            $dataWarung = [
                'id' => htmlspecialchars($this->input->post('id')),
                'id_wkategori' => 1,
                'wilayah' => 'Tegal',
                'hari_buka' => 'Setiap Hari',
                'waktu_buka' => '00.00',
                'waktu_tutup' => '00.00',
                'no_wa' => '#',
                'instagram' => '#',
                'gofood' => '#',
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
                'image' => 'warung.jpg',
                'date_created' => time()
            ];

            $this->ModelWarung->tambahWarung($dataWarung);
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-1"></i>
                    <b>Sukses!</b> User telah diubah menjadi Warung. 
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
            redirect('admin/lihatWarung');
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

    public function hapusWarung($id)
    {
        $this->ModelUser->hapusUser($id);
        $this->ModelWarung->hapusWarung($id);
        $this->session->set_flashdata(
            'pesan',
            '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                <b>Sukses!</b> Data telah dihapus.
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
        );
        redirect('admin/lihatWarung');
    }

    function lihatWarung()
    {
        $email = $this->session->userdata('email');
        $data = [
            'title' => 'Data User Warung',
            'topbar' => $this->ModelUser->cekUser(['email' => $email])->row_array(),
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
        $email = $this->session->userdata('email');
        $data = [
            'title' => 'Data Warung',
            'topbar' => $this->ModelUser->cekUser(['email' => $email])->row_array(),
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

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required', [
            'required' => 'Nama belum diisi!'
        ]);

        if ($this->form_validation->run() == false) {
            $email = $this->session->userdata('email');
            $data = [
                'title' => 'Profile',
                'topbar' => $this->ModelUser->cekUser(['email' => $email])->row_array(),
                'user' => $this->ModelUser->cekUser(['email' => $email])->row_array()
            ];

            $this->load->view('templates/admin_header', $data);
            $this->load->view('admin/topbar', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/profile', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $data = [
                'id' => $this->input->post('id'),
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'image' => $this->input->post('image'),
                'password' => $this->input->post('password'),
                'role_id' => $this->input->post('role_id'),
                'is_active' => $this->input->post('is_active'),
                'date_created' => $this->input->post('date_created')
            ];

            $this->ModelUser->editProfile_proses($data);
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-1"></i>
                    <b>Sukses!</b> Profil telah diperbarui.
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
            redirect('admin/profile');
        }
    }

    public function edit_profile_img()
    {
        // Set the configuration for uploading the image
        $config['upload_path'] = './assets/img/userprofile/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = 10000;
        $config['max_width'] = 10000;
        $config['max_height'] = 10000;
        $config['file_name'] = 'img' . time();

        // Load the upload library and initialize it with the configuration
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            // Upload failed, display an error message
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">'
                    . $error['error'] .
                    '<button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
            redirect('admin/profile');
        } else {
            // Upload successful, update the user's profile
            $image = $this->upload->data();
            unlink('assets/img/userprofile/' . $this->input->post('image', true));
            $image = $image['file_name'];
            $data = [
                'id' => $this->input->post('id'),
                'nama' => htmlspecialchars($this->input->post('nama')),
                'image' => $image,
                'password' => $this->input->post('password'),
                'role_id' => $this->input->post('role_id'),
                'is_active' => $this->input->post('is_active'),
                'date_created' => $this->input->post('date_created')
            ];

            $this->ModelUser->editProfile_proses($data);

            // Redirect to the profile page or display a success message
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle me-1"></i>
                    <b>Sukses!</b> Image profil telah diperbarui.
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
            redirect('admin/profile');
        }
    }
}
