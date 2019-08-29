<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_akses();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('M_berita');
        $this->load->helper('form');
    }

    public function index()
    {

        $data['judul'] = 'Admin - Berita';





        $email = $this->db->get_where('pengguna', ['username' =>
        $this->session->userdata('username')]);
        $role_id = $this->db->get_where('pengguna', ['role_id' =>
        $this->session->userdata('role_id')]);

        $cek_id_akses2 = $this->M_berita->cek_akses_2($email, $role_id);
        if ($cek_id_akses2 == 1) {
            $data['berita'] = $this->M_berita->getUserId();
            $data['pengguna'] = $this->db->get_where('pengguna', ['username' =>
            $this->session->userdata('username')])->row_array();
            $this->load->view("admin/berita/berita_list", $data);
        } else {
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('username');
            $this->session->unset_userdata('role_id');

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kesalahan Tidak Di Ketahui</div>');
            redirect('user/Login');
        }
    }

    public function add()
    {
        $data['pengguna'] = $this->db->get_where('pengguna', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['judul'] = 'SUPERUSER';


        $admin = $this->M_superuser;
        $validation = $this->form_validation;
        $validation->set_rules($admin->rules());

        if ($validation->run()) {
            $admin->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/superuser/new_form", $data);
    }
    public function delete($id_pengguna = null)
    {
        if (!isset($id_pengguna)) show_404();

        if ($this->M_superuser->delete($id_pengguna)) {
            redirect(site_url('admin/register/'));
        }
    }
}
