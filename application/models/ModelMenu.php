<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelMenu extends CI_Model
{
    private $table = 'table';
    private $pk    = 'pk';

    public function tampilMenu()
    {
        return $this->db->get('wmenu')->result_array();
    }

    public function tambahMenu($data = null)
    {
        return $this->db->insert('wmenu', $data);
    }

    public function jmlMenu()
    {
        $query = $this->db->get('wmenu');
        return $query->num_rows();
    }
}
