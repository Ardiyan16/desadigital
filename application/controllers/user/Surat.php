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
        $this->load->model('M_registrasi');
    }

    public function index()
    {
        $data['pengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Permintaan Surat';
        $this->load->view('user/permintaansurat', $data);
    }

    public function surat()
    {
        $data['pengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Permintaan Surat';
        $data['surat'] = $this->M_surat->uisurat();
        $this->load->view('user/surat', $data);
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




    public function edit($id_surat = null)
    {
        if (!isset($id_surat)) redirect('admin/surat/');

        $surat = $this->M_surat;
        $validation = $this->form_validation;
        $validation->set_rules($surat->rules());

        if ($validation->run()) {
            $surat->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["surat"] = $surat->getById($id_surat);
        if (!$data["surat"]) show_404();

        $data['pengguna'] = $this->db->get_where('pengguna', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view("user/surat", $data);
    }

    public function editan()
    {
        $surat = $this->M_surat;
        $surat->update();
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Berhasil Diubah :)</div>');
        redirect('admin/surat/');
    }

    public function delete($id_surat = null)
    {
        if (!isset($id_surat)) show_404();

        if ($this->M_surat->delete($id_surat)) {
            redirect(site_url('admin/Surat/'));
        }
    }

    public function prosessurat()
    {
        $nik = $this->input->post('nik');
        $data['surat'] = $this->db->get_where('pengguna', ['nik' => $nik])->row_array();
        $data['surat'] = $this->M_surat->uisurat();
        $data['judul'] = 'surat';
        $this->load->view('user/surat', $data);
    }
}
