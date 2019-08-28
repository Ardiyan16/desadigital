<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // if (!$this->session->userdata('email')) {
        //     redirect('admin/login');
        // }
        $this->load->model("M_superuser");
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function index()
    {

        $datas['pengguna'] = $this->db->get_where('pengguna', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view("admin/_partials/spesialtop", $datas);




        $email = $this->db->get_where('pengguna', ['email' =>
        $this->session->userdata('email')]);
        $role_id = $this->db->get_where('pengguna', ['role_id' =>
        $this->session->userdata('role_id')]);

        $cek_id_akses3 = $this->M_superuser->cek_akses_3($email, $role_id);
        if ($cek_id_akses3 == 1) {
            $data["pegawai"] = $this->M_superuser->getUserId();
            $this->load->view("admin/_partials/sidebaradmin/sidebar_su", $data);
        } else {
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('role_id');

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kesalahan Tidak Di Ketahui</div>');
            redirect('admin/Loginadmin');
        }
    }
}
