<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Wisata extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_akses();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('M_wisata');
        $this->load->helper('form');
    }

    public function index()
    {

        $data['judul'] = 'Admin - Wisata';





        $email = $this->db->get_where('pengguna', ['username' =>
        $this->session->userdata('username')]);
        $role_id = $this->db->get_where('pengguna', ['role_id' =>
        $this->session->userdata('role_id')]);

        $cek_id_akses2 = $this->M_wisata->cek_akses_2($email, $role_id);
        if ($cek_id_akses2 == 1) {
            $data['wisata'] = $this->M_wisata->getUserId();
            $data['pengguna'] = $this->db->get_where('pengguna', ['username' =>
            $this->session->userdata('username')])->row_array();
            $this->load->view("admin/wisata/list", $data);
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
        $data['judul'] = 'Tambah Berita';


        $berita = $this->M_berita;
        $validation = $this->form_validation;
        $validation->set_rules($berita->rules());

        if ($validation->run()) {
            $berita->save();
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan :)</div>');
            redirect('admin/Berita');
        }

        $this->load->view("admin/berita/berita_list", $data);
    }

    public function edit($id_berita = null)
    {
        if (!isset($id_berita)) redirect('admin/berita/');

        $berita = $this->M_berita;
        $validation = $this->form_validation;
        $validation->set_rules($berita->rules());

        if ($validation->run()) {
            $berita->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["berita"] = $berita->getById($id_berita);
        if (!$data["berita"]) show_404();

        $data['pengguna'] = $this->db->get_where('pengguna', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view("admin/berita/berita_edit", $data);
    }

    public function editan()
    {
        $berita = $this->M_berita;
        $berita->update();
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        redirect('admin/berita/');
    }

    public function delete($id_berita = null)
    {
        if (!isset($id_berita)) show_404();

        if ($this->M_berita->delete($id_berita)) {
            redirect(site_url('admin/Berita/'));
        }
    }
}
