<?php

defined('BASEPATH') or exit('No direct script access allowed');

class regis2 extends CI_Controller
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
        $this->load->view('user/akses/registrasi2');
    }

    public function registrasi2()
    {
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
    }
}
