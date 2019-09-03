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
        $data['judul'] = 'Tambah Berita';


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
}
