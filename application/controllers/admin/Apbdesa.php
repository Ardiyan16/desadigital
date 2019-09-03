<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Apbdesa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_akses();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('M_apbd');
        $this->load->model('M_pemasukan');
        $this->load->model('M_kritik');
    }

    public function index()
    {
        $data['pengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['apbd'] = $this->M_apbd->getAll();
        $data['judul'] = 'Data APB Desa';
        $this->load->view('admin/apbdesa/apbd_list', $data);
    }

    public function add()
    {
        $data['pengguna'] = $this->db->get_where('pengguna', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Tambah Apbd';


        $apbdesa = $this->M_apbd;
        $validation = $this->form_validation;
        $validation->set_rules($apbdesa->rules());

        if ($validation->run()) {
            $apbdesa->save();
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan :)</div>');
            redirect('admin/Apbdesa');
        }

        $this->load->view("admin/apbdesa/apbd_new", $data);
    }



    public function edit($kodeapbd = null)
    {
        if (!isset($kodeapbd)) redirect('admin/apbdesa/');

        $apbdesa = $this->M_apbd;
        $validation = $this->form_validation;
        $validation->set_rules($apbdesa->rules());

        if ($validation->run()) {
            $apbdesa->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["apbdesa"] = $apbdesa->getById($kodeapbd);
        if (!$data["apbdesa"]) show_404();

        $data['pengguna'] = $this->db->get_where('pengguna', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view("admin/apbdesa/apbd_edit", $data);
    }

    public function editan()
    {
        $apbdesa = $this->M_apbd;
        $apbdesa->update();
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Berhasil Diubah :)</div>');
        redirect('admin/apbdesa/');
    }

    public function delete($kodeapbd = null)
    {
        if (!isset($kodeapbd)) show_404();

        if ($this->M_apbd->delete($kodeapbd)) {
            redirect(site_url('admin/Apbdesa/'));
        }
    }




    //---------------------------- CONTROLLER PEMASUKAN APBD/ANGGARAN MASUK APB DESA -----------------------------------



    public function pemasukan()
    {
        $data['pengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['pemasukan'] = $this->M_pemasukan->getAll();
        $data['judul'] = 'Pemasukan APB Desa';
        $this->load->view('admin/pemasukan/list', $data);
    }
    public function pemasukanadd()
    {
        $data['pengguna'] = $this->db->get_where('pengguna', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Tambah Pemasukan Apbd';


        $pemasukan = $this->M_pemasukan;
        $validation = $this->form_validation;
        $validation->set_rules($pemasukan->rules());

        if ($validation->run()) {
            $pemasukan->save();
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Berhasil Disimpan :)</div>');
            redirect('admin/Apbdesa/pemasukan');
        }

        $this->load->view("admin/pemasukan/new", $data);
    }


    public function pemasukanedit($id = null)
    {
        if (!isset($id)) redirect('admin/apbdesa/pemasukan');

        $pemasukan = $this->M_pemasukan;
        $validation = $this->form_validation;
        $validation->set_rules($pemasukan->rules());

        if ($validation->run()) {
            $pemasukan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["pemasukan"] = $pemasukan->getById($id);
        if (!$data["pemasukan"]) show_404();

        $data['pengguna'] = $this->db->get_where('pengguna', ['username' =>
        $this->session->userdata('username')])->row_array();

        $this->load->view("admin/pemasukan/edit", $data);
    }

    public function pemasukaneditan()
    {
        $pemasukan = $this->M_pemasukan;
        $pemasukan->update();
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Berhasil Diubah :)</div>');
        redirect('admin/apbdesa/pemasukan');
    }

    public function pemasukandelete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->M_pemasukan->delete($id)) {
            redirect(site_url('admin/Apbdesa/pemasukan'));
        }
    }


    //------------------------------------- CONTROLLER KRITIK DAN SARAN ------------ -----------------------------------
    public function kritik()
    {
        $data['pengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['kritik'] = $this->M_kritik->getUserId();
        $data['judul'] = 'Data Kritik Dan Saran';
        $this->load->view('admin/kritik/list', $data);
    }

    public function kritikdelete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->M_kritik->delete($id)) {
            redirect(site_url('admin/Apbdesa/kritik'));
        }
    }
}
