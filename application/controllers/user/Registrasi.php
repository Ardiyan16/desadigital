<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function index()
    {
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('no_telepon', 'No Telepon', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[pengguna.email]', ['is_unique' => 'email telah terdaftar']);
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]', ['matches' => 'konfirmasi password salah']);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('user/akses/registrasi1');
        } else {
            $this->proses_register();
        }
    }

    private function proses_register()
    {
        $data = [
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'alamat' => $this->input->post('alamat'),
            'no_telepon' => $this->input->post('no_telepon'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'status' => $this->input->post('status'),
            'foto' => 'default.jpg',
            'email' =>  htmlspecialchars($this->input->post('email', true)),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'password' => $this->input->post('password1'),
            'aktif' => 0
        ];

        $this->db->insert('pengguna', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert">Data Anda berhasil di simpan</div>');
        redirect('user/Loading');
    }
}
