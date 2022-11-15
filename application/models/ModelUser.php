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

    public function tampilUser()
    {
        return $this->db->get('user')->result_array();
    }

    public function jmlUser()
    {
        $query = $this->db->get('user');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
