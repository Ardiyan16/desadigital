<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('M_berita');
        $this->load->model('M_event');
        $this->load->model('M_wisata');
        $this->load->model('M_oleh');
        $this->load->model('M_kerajinan');
    }

    public function index()
    {

        $data["berita"] = $this->M_berita->ui_berita();
        $data['judul'] = 'berita';
        $this->load->view('user/berita', $data);
    }

    public function event()
    {
        $data["event"] = $this->M_event->ui();
        $data['judul'] = 'event';
        $this->load->view('user/event', $data);
    }
    public function wisata()
    {
        $data["wisata"] = $this->M_wisata->ui_wisata();
        $data['judul'] = 'wisata';
        $this->load->view('user/wisata', $data);
    }
    public function fpberita($id_berita)
    {
        $data['berita'] = $this->db->get_where('berita', ['id_berita' => $id_berita])->row_array();
        $data['judul'] = 'fp';
        $this->load->view('user/fpberita', $data);
    }
    public function fpevent($id_event)
    {
        $data['event'] = $this->db->get_where('event_desa', ['id_event' => $id_event])->row_array();
        $data['judul'] = 'fp event';
        $this->load->view('user/fpevent', $data);
    }

    public function fpwisata($id_wisata)
    {
        $data['wisata'] = $this->db->get_where('wisata', ['id_wisata' => $id_wisata])->row_array();
        $data['judul'] = 'fp wisata';
        $this->load->view('user/fpwisata', $data);
    }

    public function oleholeh()
    {
        $data["oleholeh"] = $this->M_oleh->ui_oleh();
        $data['judul'] = 'oleh-oleh';
        $this->load->view('user/oleholeh.php', $data);
    }

    public function kerajinan()
    {
        $data["kerajinan"] = $this->M_kerajinan->ui_kerajinan();
        $data['judul'] = 'kerajinan';
        $this->load->view('user/kerajinan', $data);
    }
}
