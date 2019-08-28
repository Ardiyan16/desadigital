<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Datauser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_akses();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('M_admin');
        $this->load->helper('form');
    }

    public function index()
    {
        $data['pengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['user'] = $this->M_admin->getAll();
        $data['judul'] = 'Data User';
        $this->load->view('admin/datapengguna.php', $data);
    }

    public function hapus($id_pengguna = null)
    {
        if (!isset($id_pengguna)) show_404($id_pengguna);

        if ($this->M_admin->delete($id_pengguna)) {
            redirect(site_url('admin/Datauser'));
        }
    }
}
