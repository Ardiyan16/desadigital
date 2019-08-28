<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Loginadmin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->model('M_login');
        $this->load->helper('form');
    }

    public function index()
    {
        // load view admin/overview.php
        $data['judul'] = 'Login';
        $this->load->view("admin/login", $data);
    }
    function aksi_login()
    {
        $email = htmlspecialchars($this->input->post('email', TRUE), ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);


        $admin = $this->db->get_where('pengguna', ['email' => $email])->row_array();

        if ($admin) {
            if ($password == $admin['password']) {
                $data = [
                    'email' => $admin['email'],
                    'role_id' => $admin['role_id']
                ];
                $this->session->set_userdata($data);
                if ($admin['role_id'] == '1') {
                    redirect('admin/Datauser');
                } else if ($admin['role_id'] == '2') {
                    redirect('admin/Dashboard');
                } else if ($admin['role_id'] == '3') {
                    redirect('admin/register');
                } else {
                    $this->session->unset_userdata('email');
                    $this->session->unset_userdata('role_id');

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
                    redirect('admin/Loginadmin');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                redirect('admin/Loginadmin');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('admin/Loginadmin');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logout</div>');
        redirect('Home');
    }
}





//     {
//         $username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
//         $password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);


//         $user = $this->db->get_where('admin', ['username' => $username])->row_array();

//         if ($user) {
//             if ($password == $user['password']) {
//                 $datas = [
//                     'username' => $user['username']

//                 ];
//                 $this->session->set_userdata($datas);
//                 redirect('admin/Template');
//             } else {
//                 $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
//                 redirect('admin/Login');
//             }
//         } else {
//             $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username is not registered!</div>');
//             redirect('admin/Login');
//         }
//     }


//     // function aksi_login()
//     // {
//     // 	// if(isset($_POST['submit'])){
//     // 	$username = $this->input->post('username');
//     // 	$password = $this->input->post('password');
//     // 	$berhasil = $this->m_login->cek_login($username, $password);
//     // 	if ($berhasil == 1) {
//     // 		redirect('admin/Produk');
//     // 	} else {
//     // 		$this->load->view("admin/login");
//     // 	}
//     // }


//     function logout()
//     {
//         $this->session->unset_userdata('username');

//         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logout</div>');
//         redirect('admin/Login');
//     }
// }
