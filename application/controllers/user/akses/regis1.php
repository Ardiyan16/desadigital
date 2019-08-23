<?php

defined('BASEPATH') or exit('No direct script access allowed');

class regis1 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user/akses/Mregis1");
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function index()
    {
        $data["pengguna"] = $this->Mregis1->getAll();
        $this->load->view('user/akses/registrasi1', $data);
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('nama_lengkap', 'nama lengkap', 'trim|required');
        $this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'trim|required');
        $this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('no_telepon', 'no telepon', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis kelamin', 'trim|required');
        $this->form_validation->set_rules('status', 'status', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/akses/register1');
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
            'status' => $this->input->post('status')
        ];

        $this->db->insert('pengguna', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">data tersimpan lanjutkan ke tahap 2</div>');
        redirect('admin/akses/regis2');
    }
}
