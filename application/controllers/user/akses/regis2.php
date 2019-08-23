<?php

defined('BASEPATH') or exit('No direct script access allowed');

class regis2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user/akses/Mregis2");
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function index()
    {
        $data["pengguna"] = $this->Mregis2->getAll();
        $this->load->view('user/akses/registrasi2', $data);
    }
}
