<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('M_event');
        $this->load->model('M_berita');
        $this->load->model('M_wisata');
    }

    public function index()
    {
        $data["event"] = $this->M_event->ui();
        $data["berita"] = $this->M_berita->ui_berita();
        $data["wisata"] = $this->M_wisata->ui_wisata();
        $data['judul'] = 'home';
        $this->load->view('user/home', $data);
    }

    public function homeuser()
    {
        $this->load->view('user/home1');
    }
}
