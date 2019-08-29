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
    }

    public function index()
    {

        $data["berita"] = $this->M_berita->ui_berita();
        $this->load->view('user/berita', $data);
    }
}
