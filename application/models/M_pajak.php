<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_pajak extends CI_Model
{
    private $_table = "pendaftaran_pajak";

    public $nik;
    public $nama_lengkap;
    public $alamat;
    public $email;
    public $jenis_pajak;


    public function rules()
    {
        return [

            [
                'field' => 'nama_pengguna',
                'label' => 'nama_pengguna',
                'rules' => 'required'
            ],

        ];
    }
}
