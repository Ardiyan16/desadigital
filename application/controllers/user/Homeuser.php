<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Homeuser extends CI_Controller
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
        $this->load->view('user/home1');
    }

    public function editprofile()
    {
        $this->load->view('user/editprofile');
    }
}
