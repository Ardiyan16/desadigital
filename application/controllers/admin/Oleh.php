<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Oleh extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_akses();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('M_oleh');
        $this->load->helper('form');
    }

    public function index()
    {

        $data['judul'] = 'Admin - Oleh Oleh';





        $email = $this->db->get_where('pengguna', ['username' =>
        $this->session->userdata('username')]);
        $role_id = $this->db->get_where('pengguna', ['role_id' =>
        $this->session->userdata('role_id')]);

        $cek_id_akses2 = $this->M_oleh->cek_akses_2($email, $role_id);
        if ($cek_id_akses2 == 1) {
            $data['oleh'] = $this->M_oleh->getUserId();
            $data['pengguna'] = $this->db->get_where('pengguna', ['username' =>
            $this->session->userdata('username')])->row_array();
            $this->load->view("admin/oleh/list", $data);
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
        $data['judul'] = 'Tambah Oleh Oleh';


        $oleh = $this->M_oleh;
        $validation = $this->form_validation;
        $validation->set_rules($oleh->rules());

        if ($validation->run()) {
            $oleh->save();
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan :)</div>');
            redirect('admin/Oleh');
        }

        $this->load->view("admin/oleh/new", $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/oleh/');

        $oleh = $this->M_oleh;
        $validation = $this->form_validation;
        $validation->set_rules($oleh->rules());

        if ($validation->run()) {
            $oleh->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["oleh"] = $oleh->getById($id);
        if (!$data["oleh"]) show_404();

        $data['pengguna'] = $this->db->get_where('pengguna', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view("admin/oleh/edit", $data);
    }

    public function editan()
    {
        $oleh = $this->M_oleh;
        $oleh->update();
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Berhasil Diubah :)</div>');
        redirect('admin/oleh/');
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->M_oleh->delete($id)) {
            redirect(site_url('admin/Oleh/'));
        }
    }
}
