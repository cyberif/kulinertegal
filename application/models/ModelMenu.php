<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelMenu extends CI_Model
{
    private $table = 'table';
    private $pk    = 'pk';

    public function tambahMenu($data = null)
    {
        return $this->db->insert('wmenu', $data);
    }

    public function hapusMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('wmenu');
    }

    public function getMenu($where = null)
    {
        return $this->db->get_where('wmenu', $where)->result_array();
    }

    public function jmlMenu($where = null)
    {
        $query = $this->db->get_where('wmenu', $where);
        return $query->num_rows();
    }
}
