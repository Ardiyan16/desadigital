<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
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
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('user/akses/login');
        } else {
            $this->proseslogin();
        }
    }

    private function proseslogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $pengguna = $this->db->get_where('pengguna', ['username' => $username])->row_array();
        $cekpass = $this->db->get_where('pengguna', array('password' => $password));


        //jika usernya terdaftar
        if ($pengguna) {
            //jika akun user aktif
            if ($pengguna['aktif'] == 1) {
                //cek password
                if ($cekpass->num_rows() > 0) {

                    $data = [
                        'username' => $pengguna['username'],
                        'foto' => $pengguna['foto']
                    ];
                    $data['logged_in'] = TRUE;
                    $this->session->set_userdata($data);
                    redirect('user/Homeuser');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf password yang anda masukkan salah!</div>');
                    redirect('user/Login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf Akun anda belum di verifikasi!</div>');
                redirect('user/Login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf username yang anda masukkan salah!</div>');
            redirect('user/Login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">anda telah logout</div>');
        redirect('Home');
    }
}
