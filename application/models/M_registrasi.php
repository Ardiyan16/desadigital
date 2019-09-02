<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_registrasi extends CI_Model
{
    private $_table = "pengguna";

    public $nik;
    public $nama_lengkap;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $alamat;
    public $no_telepon;
    public $jenis_kelamin;
    public $status;

    public function rules()
    {
        return [
            [
                'field' => 'nik',
                'label' => 'nik',
                'rules' => 'required'
            ],

            [
                'field' => 'nama_lengkap',
                'label' => 'nama lengkap',
                'rules' => 'required'
            ],

            [
                'field' => 'tempat_lahir',
                'label' => 'tempat lahir',
                'rules' => 'required'
            ],

            [
                'field' => 'tanggal_lahir',
                'label' => 'tanggal lahir',
                'rules' => 'required'
            ],

            [
                'field' => 'alamat',
                'label' => 'alamat',
                'rules' => 'required'
            ],

            [
                'field' => 'no_telepon',
                'label' => 'no telepon',
                'rules' => 'required'
            ],

            [
                'field' => 'jenis_kelamin',
                'label' => 'jenis kelamin',
                'rules' => 'required'
            ],

            [
                'field' => 'status',
                'label' => 'status',
                'rules' => 'required'
            ]
        ];
    }
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($nik)
    {
        return $this->db->get_where($this->_table, ["nik" => $nik])->row();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->nik = $post["nik"];
        $this->nama_lengkap = $post["nama_lengkap"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->alamat = $post["alamat"];
        $this->no_telepon = $post["no_telepon"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->status = $post["status"];

        $this->db->insert($this->_table, $this);
    }

    public function jumlahuser()
    {
        $user = "SELECT count(nik) as count FROM pengguna WHERE role_id=1 ";
        $result = $this->db->query($user);
        return $result->row()->count;
    }
}
