<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_apbd extends CI_Model
{
    private $_table = "apbdesa";
    private $table = "anggaran_apbdesa";


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

    public function getById($kodeapbd)
    {
        return $this->db->get_where($this->_table, ["kodeapbd" => $kodeapbd])->row();
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
        $config['upload_path']          = './assets/img/foto_apbd/';
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

    public function update()
    {
        $post = $this->input->post();
        $this->kodeapbd = $post["kodeapbd"];
        $this->alokasi_dana = $post["alokasi_dana"];
        $this->anggaran_dana = $post["anggaran_dana"];
        $this->biaya_alokasi = $post["biaya_alokasi"];
        $this->sisa_alokasi = $post["sisa_alokasi"];
        $this->petugas_alokasi = $post["petugas_alokasi"];


        if (!empty($_FILES["foto"]["name"])) {
            $this->foto_alokasi = $this->_uploadImage();
        } else {
            $this->foto_alokasi = $post["old_image"];
        }
        $this->db->update($this->_table, $this, array('kodeapbd' => $post['kodeapbd']));
    }

    public function delete($kodeapbd)
    {
        $this->_deleteImage($kodeapbd);
        return $this->db->delete($this->_table, array("kodeapbd" => $kodeapbd));
    }

    private function _deleteImage($kodeapbd)
    {
        $pegawai = $this->getById($kodeapbd);
        if ($pegawai->foto != "01.jpg") {
            $filename = explode(".", $pegawai->foto)[0];
            return array_map('unlink', glob(FCPATH . "upload/profil/$filename.*"));
        }
    }
}
