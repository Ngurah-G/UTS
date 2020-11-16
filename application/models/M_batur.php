<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_batur extends CI_Model
{

    public function datauser()
    {
        $this->db->order_by('user_id', 'asc');
        $data = $this->db->get('tb_user')->result_array();
        return $data;
    }

    public function databerita()
    {
        $this->db->order_by('id_berita', 'asc');
        $data = $this->db->get('tb_berita')->result_array();
        return $data;
    }
}
