<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelPaket extends CI_Model
{
    private $table = 'table';
    private $pk    = 'pk';

    public function tambahPaket($data = null)
    {
        return $this->db->insert('wpaket', $data);
    }

    public function hapusPaket($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('wpaket');
    }

    public function getPaket($where = null)
    {
        return $this->db->get_where('wpaket', $where)->result_array();
    }

    public function jmlPaket($where = null)
    {
        $query = $this->db->get_where('wpaket', $where);
        return $query->num_rows();
    }
}
