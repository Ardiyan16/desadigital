<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kerajinan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_akses();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('M_kerajinan');
        $this->load->helper('form');
    }

    public function index()
    {

        $data['judul'] = 'Admin - Kerajinan Desa';





        $email = $this->db->get_where('pengguna', ['username' =>
        $this->session->userdata('username')]);
        $role_id = $this->db->get_where('pengguna', ['role_id' =>
        $this->session->userdata('role_id')]);

        $cek_id_akses2 = $this->M_kerajinan->cek_akses_2($email, $role_id);
        if ($cek_id_akses2 == 1) {
            $data['kerajinan'] = $this->M_kerajinan->getUserId();
            $data['pengguna'] = $this->db->get_where('pengguna', ['username' =>
            $this->session->userdata('username')])->row_array();
            $this->load->view("admin/kerajinan/list", $data);
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
        $data['judul'] = 'Tambah Kerajinan Desa';


        $kerajinan = $this->M_kerajinan;
        $validation = $this->form_validation;
        $validation->set_rules($kerajinan->rules());

        if ($validation->run()) {
            $kerajinan->save();
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan :)</div>');
            redirect('admin/Kerajinan');
        }

        $this->load->view("admin/kerajinan/new", $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/kerajinan/');

        $kerajinan = $this->M_kerajinan;
        $validation = $this->form_validation;
        $validation->set_rules($kerajinan->rules());

        if ($validation->run()) {
            $kerajinan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["kerajinan"] = $kerajinan->getById($id);
        if (!$data["kerajinan"]) show_404();

        $data['pengguna'] = $this->db->get_where('pengguna', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view("admin/kerajinan/edit", $data);
    }

    public function editan()
    {
        $kerajinan = $this->M_kerajinan;
        $kerajinan->update();
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Berhasil Diubah :)</div>');
        redirect('admin/kerajinan/');
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->M_kerajinan->delete($id)) {
            redirect(site_url('admin/Kerajinan/'));
        }
    }
}
