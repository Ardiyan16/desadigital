<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('admin/login');
        }
        $this->load->model("M_admin");
        $this->load->model("M_surat");
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function index()
    {

        $datas['pengguna'] = $this->db->get_where('pengguna', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view("admin/_partials/spesialtop", $datas);


        // hak akses untuk sidebar
        $email = $this->db->get_where('pengguna', ['email' =>
        $this->session->userdata('email')]);
        $id_akses = $this->db->get_where('pengguna', ['id_akses' =>
        $this->session->userdata('id_akses')]);

        $cek_id_akses_adm = $this->M_admin->cek_akses_adm($email, $id_akses);
        if ($cek_id_akses_adm == 1) {
            $this->load->view('admin/_partials/sidebar/admin_sidebar');
        } else {
            $data["pegawai"] = $this->pegawai_model->getUserId();
            $this->load->view("admin/pegawai/list", $data);
        }
    }
}
