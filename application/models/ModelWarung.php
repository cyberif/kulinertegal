<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelWarung extends CI_Model
{
    private $table = 'table';
    private $pk    = 'pk';

    public function tampilWarung()
    {
        return $this->db->get('warung')->result_array();
    }

    public function jmlWarung()
    {
        $query = $this->db->get('warung');
        return $query->num_rows();
    }
}
