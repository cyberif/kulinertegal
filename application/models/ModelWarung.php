<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelWarung extends CI_Model
{
    private $table = 'table';
    private $pk    = 'pk';
    public function tambahWarung($data = null)
    {
        return $this->db->insert('warung', $data);
    }

    public function tampilWarung()
    {
        return $this->db->get('warung')->result_array();
    }

    public function warungWhere($where = null)
    {
        return $this->db->get_where('warung', $where)->result_array();
    }
    public function warungWhereRow($where = null)
    {
        return $this->db->get_where('warung', $where)->row_array();
    }

    public function jmlWarung()
    {
        $query = $this->db->get('warung');
        return $query->num_rows();
    }

    public function hapusWarung($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('warung');
    }

    public function warungLimit($where = null)
    {
        $query = $this->db->get_where('warung', $where, 4);
        return $query;
    }
}
