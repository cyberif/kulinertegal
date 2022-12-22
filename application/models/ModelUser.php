<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{
    private $table = 'table';
    private $pk    = 'pk';

    public function cekData($where = null)
    {
        return $this->db->get_where('user', $where);
    }


    public function simpanData($data = null)
    {
        return $this->db->insert('user', $data);
    }

    public function cekUser($where = null)
    {
        return $this->db->get_where('user', $where);
    }

    public function hapusUser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function getIdUser($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function editUser_proses($data = null)
    {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->update('user', $data);
    }
    public function editProfile_proses($data = null)
    {
        $email = $this->input->post('email');
        $this->db->where('email', $email);
        $this->db->update('user', $data);
    }
}
