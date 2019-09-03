<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    private $_table = "apbdesa";

    public $kodeapbd;
    public $alokasi_dana;
    public $anggaran_dana;
    public $biaya_alokasi;
    public $sisa_alokasi;
    public $petugas_alokasi;
    public $foto_alokasi;


    public function rules()
    {
        return [

            [
                'field' => 'kodeapbd',
                'label' => 'Kode APBD',
                'rules' => 'required'
            ],

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function save()
    {
        $post = $this->input->post();

        $this->kodeapbd = $post["kodeapbd"];
        $this->alokasi_dana = $post["alokasi_dana"];
        $this->anggaran_dana = $post["anggaran_dana"];
        $this->biaya_alokasi = $post["biaya_alokasi"];
        $this->sisa_alokasi = $post["sisa_alokasi"];
        $this->petugas_alokasi = $post["petugas_alokasi"];
        $this->foto_alokasi = $this->_uploadImage();

        $this->db->insert($this->_table, $this);
    }
    private function _uploadImage()
    {
        $config['upload_path']          = './assets/img/';
        $config['allowed_types']        = 'gif|jpg|png';
        $nama_lengkap = $_FILES['foto']['name'];
        $config['file_name']            = $nama_lengkap;
        $config['overwrite']            = true;
        $config['max_size']             = 3024;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }

        print_r($this->upload->display_errors());
    }
}
