<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_registrasi extends CI_Model
{
    private $_table = "event_desa";

    public $id_event;
    public $judul_event;
    public $isi_event;
    public $foto;
    public $tangal_mulai;
    public $tanggal_selesai;
    public $id_dusun;
    public $id_rt;
    public $id_rw;
}
