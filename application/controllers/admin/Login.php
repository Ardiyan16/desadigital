<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
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

        $this->load->view("admin/login");
    }
    function aksi_login()
    {
        $email = htmlspecialchars($this->input->post('email', TRUE), ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);


        $user = $this->db->get_where('pengguna', ['email' => $email])->row_array();

        if ($user) {
            if ($password == $user['password']) {
                $datas = [
                    'email' => $user['email'],
                    'id_akses' => $user['id_akses']
                ];
                $this->session->set_userdata($datas);
                if ($user['id_akses'] == 'kpl') {
                    redirect('admin/kepala');
                }
                if ($user['id_akses'] == 'adm') {
                    redirect('admin/Admin');
                }
                if ($user['id_akses'] == 'stf') {
                    redirect('admin/staff');
                } else {
                    $this->session->unset_userdata('email');
                    $this->session->unset_userdata('id_akses');

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
                    redirect('admin/login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                redirect('admin/login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('admin/login');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('id_akses');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logout</div>');
        redirect('admin/login');
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
