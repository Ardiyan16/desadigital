<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
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
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('no_telepon', 'No Telepon', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[pengguna.email]', ['is_unique' => 'email telah terdaftar']);
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]', ['matches' => 'konfirmasi password salah']);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('user/akses/registrasi1');
        } else {
            $this->proses_register();
        }
    }

    private function proses_register()
    {
        $email = $this->input->post('email', true);
        $data = [
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'alamat' => $this->input->post('alamat'),
            'no_telepon' => $this->input->post('no_telepon'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'status' => $this->input->post('status'),
            'foto' => 'default.jpg',
            'email' =>  htmlspecialchars($email),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'password' => $this->input->post('password1'),
            'aktif' => 0,
            'date_created' => time()
        ];

        $token = base64_encode(random_bytes(30));
        $user_token = [
            'email' => $email,
            'token' => $token,
            'date_created' => time()
        ];

        $this->db->insert('pengguna', $data);
        $this->db->insert('token', $user_token);

        $this->kirimemail($token, 'verify');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Anda berhasil di simpan</div>');
        redirect('user/Loading');
    }

    private function kirimemail($token, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'villagedeveloper79@gmail.com',
            'smtp_pass' => '09january',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);

        $this->email->from('villagedeveloper79@gmail.com', 'Village Developer');
        $this->email->to($this->input->post('email'));

        if ($type == 'verify') {
            $this->email->subject('Verifikasi Akun');
            $this->email->message('Silahkan klik link untuk verifikasi akun anda : <a href="' . base_url() . 'user/Registrasi/verify?email=' . $this->input->post('email') .
                '&token=' . urlencode($token) . '">aktivasi akun</a>');
        } else if ($type == 'forgot') {
            $this->email->subject('Ganti Password');
            $this->email->message('Silahkan klik link untuk mengubah password anda : <a href="' . base_url() . 'user/Registrasi/gantipassword?email=' . $this->input->post('email') .
                '&token=' . urlencode($token) . '">ganti password</a>');
        }


        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $pengguna = $this->db->get_where('pengguna', ['email' => $email])->row_array();

        if ($pengguna) {

            $usertoken = $this->db->get_where('token', ['token' => $token])->row_array();

            if ($usertoken) {

                if (time() - $usertoken['date_created'] < (60 * 60 * 24)) {

                    $this->db->set('aktif', 1);
                    $this->db->where('email', $email);
                    $this->db->update('pengguna');

                    $this->db->delete('token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $email . ' telah terverifikasi</div>');
                    redirect('user/Login');
                } else {

                    $this->db->delete('pengguna', ['email' => $email]);
                    $this->db->delete('token', ['token' => $token]);

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun anda gagal di verifikasi! Token anda kadaluarsa!</div>');
                    redirect('user/Login');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun anda gagal di verifikasi! Token Salah!</div>');
                redirect('user/Login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun anda gagal di verifikasi! Email Salah!</div>');
            redirect('user/Login');
        }
    }

    public function Forgotpassword()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        if ($this->form_validation->run() == false) {
            $this->load->view('user/akses/forgotpassword');
        } else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('pengguna', ['email' => $email, 'aktif' => 1])->row_array();

            if ($user) {

                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];

                $this->db->insert('token', $user_token);
                $this->kirimemail($token, 'forgot');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Cek email anda untuk mengubah password!</div>');
                redirect('user/Registrasi/Forgotpassword');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email anda tidak terdaftar atau belum verifikasi!</div>');
                redirect('user/Registrasi/Forgotpassword');
            }
        }
    }

    public function gantipassword()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');


        $pengguna = $this->db->get_where('pengguna', ['email' => $email])->row_array();

        if ($pengguna) {

            $user_token = $this->db->get_where('token', ['token' => $token])->row_array();

            if ($user_token) {
                $this->session->set_userdata('ganti_email', $email);
                $this->ubahpassword();
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda gagal ganti password! Token salah!</div>');
                redirect('user/Login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda gagal ganti password! Email salah!</div>');
            redirect('user/Login');
        }
    }

    public function ubahpassword()
    {

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]');
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {

            $this->load->view('user/akses/ubahpassword');
        } else {

            $password = $this->input->post('password1');
            $email = $this->session->userdata('ganti_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('pengguna');

            $this->session->unset_userdata('ganti_email');

            $this->db->delete('token', ['email' => $email]);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password anda berhasil di ubah</div>');
            redirect('user/Login');
        }
    }
}
