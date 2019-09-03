<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Homeuser extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_akses();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('M_berita');
        $this->load->model('M_event');
        $this->load->model('M_registrasi');
        $this->load->model('M_wisata');
        $this->load->model('M_pajak');
        $this->load->model('M_apbd');
    }

    public function index()
    {
        $data['pengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data["berita"] = $this->M_berita->ui_beritahome();
        $data["event"] = $this->M_event->uihome();
        $data["wisata"] = $this->M_wisata->ui_wisatahome();
        $data['judul'] = 'home';
        $this->load->view('user/home1', $data);
    }

    public function editprofile()
    {
        $data['pengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('username', 'Username', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('user/editprofile', $data);
        } else {

            $nama = $this->input->post('nama_lengkap');
            $username = $this->input->post('username');

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['foto']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/foto_profil/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    $old_image = $data['pengguna']['foto'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/foto_profil/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('foto', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                }
            }
            $this->db->set('nama_lengkap', $nama);
            $this->db->where('username', $username);
            $this->db->update('pengguna');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profil anda telah di update!</div>');
            redirect('user/Homeuser');
        }
    }
    public function beritauser()
    {
        $data['pengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data["berita"] = $this->M_berita->ui_berita();
        $data['judul'] = 'berita';
        $this->load->view('user/berita1', $data);
    }

    public function eventuser()
    {
        $data['pengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data["event"] = $this->M_event->ui();
        $data['judul'] = 'event';
        $this->load->view('user/event1', $data);
    }

    public function pendaftaranpjk()
    {
        $data['pengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['judul'] = 'pendaftaran pajak';
        $this->load->view('user/pendaftaranpajak', $data);
    }

    public function pajakadd()
    {
        $data['pengguna'] = $this->db->get_where('pengguna', ['username' =>
        $this->session->userdata('username')])->row_array();
        $data['judul'] = 'Pendaftaran pajak';


        $pajak = $this->M_pajak;
        $validation = $this->form_validation;
        $validation->set_rules($pajak->rules());

        if ($validation->run()) {
            $pajak->save();
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data Berhasil Dikirim :)</div>');
            $this->session->set_flashdata('success2', '<div class="alert alert-success" role="alert">Konfirmasi Akan Dikirim Di Email Anda Max 1x24jam</div>');
            redirect('user/Homeuser/pendaftaranpjk');
        }

        $this->load->view('user/pendaftaranpajak', $data);
    }

    public function loading2()
    {
        $data['pengguna'] = $this->db->get_awhere('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('user/akses/loading2', $data);
    }

    public function wisatauser()
    {
        $data['pengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data["wisata"] = $this->M_wisata->ui_wisata();
        $data['judul'] = 'wisata';
        $this->load->view('user/wisata1', $data);
    }

    public function fpberitauser($id_berita)
    {
        $data['pengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['berita'] = $this->db->get_where('berita', ['id_berita' => $id_berita])->row_array();
        $data['judul'] = 'fp';
        $this->load->view('user/fp_berita1', $data);
    }

    public function fpeventuser($id_event)
    {
        $data['pengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['event'] = $this->db->get_where('event_desa', ['id_event' => $id_event])->row_array();
        $data['judul'] = 'fp';
        $this->load->view('user/fpevent1', $data);
    }

    public function fpwisatauser($id_wisata)
    {
        $data['pengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['wisata'] = $this->db->get_where('wisata', ['id_wisata' => $id_wisata])->row_array();
        $data['judul'] = 'fp wisata';
        $this->load->view('user/fpwisata1', $data);
    }

    public function apbd()
    {
        $data['pengguna'] = $this->db->get_where('pengguna', ['username' => $this->session->userdata('username')])->row_array();
        $data['apbd'] = $this->M_apbd->getAll();
        $data['aapbd'] = $this->M_apbd->aapbd();
        $data['judul'] = 'apb desa';
        $this->load->view('user/apbdesa', $data);
    }
}
