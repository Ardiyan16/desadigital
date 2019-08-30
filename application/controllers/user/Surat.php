<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_akses();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('M_surat');
        $this->load->helper('form');
    }

    public function index()
    {
        $data['pengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Permintaan Surat';
        $this->load->view('user/permintaansurat', $data);
    }




    public function add()
    {
        $data['pengguna'] = $this->db->get_where('pengguna', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Permintaan Surat';


        $surat = $this->M_surat;
        $validation = $this->form_validation;
        $validation->set_rules($surat->rules());

        if ($validation->run()) {
            $surat->save();
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan :)</div>');
            redirect('user/Surat');
        }

        $this->load->view('user/permintaansurat', $data);
    }



    // public function edit($id_wisata = null)
    // {
    //     if (!isset($id_wisata)) redirect('admin/wisata');

    //     $wisata = $this->M_wisata;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($wisata->rules());

    //     if ($validation->run()) {
    //         $wisata->update();
    //         $this->session->set_flashdata('success', 'Berhasil disimpan');
    //     }

    //     $data["wisata"] = $wisata->getById($id_wisata);
    //     if (!$data["wisata"]) show_404();

    //     $data['pengguna'] = $this->db->get_where('pengguna', ['username' =>
    //     $this->session->userdata('username')])->row_array();

    //     $this->load->view("admin/wisata/edit", $data);
    // }




    public function edit($id_wisata = null)
    {
        if (!isset($id_wisata)) redirect('admin/wisata/');

        $wisata = $this->M_wisata;
        $validation = $this->form_validation;
        $validation->set_rules($wisata->rules());

        if ($validation->run()) {
            $wisata->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["wisata"] = $wisata->getById($id_wisata);
        if (!$data["wisata"]) show_404();

        $data['pengguna'] = $this->db->get_where('pengguna', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view("admin/wisata/edit", $data);
    }

    public function editan()
    {
        $wisata = $this->M_wisata;
        $wisata->update();
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Berhasil Diubah :)</div>');
        redirect('admin/wisata/');
    }

    public function delete($id_wisata = null)
    {
        if (!isset($id_wisata)) show_404();

        if ($this->M_wisata->delete($id_wisata)) {
            redirect(site_url('admin/Wisata/'));
        }
    }
}
