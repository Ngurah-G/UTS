<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->helper('url');
        $this->load->model('M_batur');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Halaman Utama Admin';
        $data['user'] = $this->db->get_where('tb_user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/topbar', $data);
        $this->load->view('admin/homepage', $data);
        $this->load->view('admin/template/footer');
    }
    public function data_user()
    {
        $data['title']     = "Halaman Daftar User";
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data_user']  = $this->M_batur->datauser();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/topbar', $data);
        $this->load->view('admin/data_user', $data);
        $this->load->view('admin/template/footer');
    }

    public function data_berita()
    {
        $data['title']     = "Halaman Daftar Berita";
        $data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['data_berita']  = $this->M_batur->databerita();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/topbar', $data);
        $this->load->view('admin/data_berita', $data);
        $this->load->view('admin/template/footer');
    }
}
