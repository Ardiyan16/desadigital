<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_berita extends CI_Model
{
    private $_table = "berita";

    public $id_berita;
    public $judul_berita;
    public $tanggal;
    public $lokasi;
    public $isi_berita;
    public $penulis;
    public $id_dusun;
    public $id_rt;
    public $id_rw;

    public $foto = "default.jpg";

    public function rules()
    {
        return [

            [
                'field' => 'judul_berita',
                'label' => 'judul_berita',
                'rules' => 'required'
            ],

        ];
    }

    public function getAll()
    {
        $dataadmin = $this->db->query("SELECT * FROM pengguna WHERE role_id = 2")->result();
        return $dataadmin;
    }

    public function getById($id_berita)
    {
        return $this->db->get_where($this->_table, ["id_berita" => $id_berita])->row();
    }

    public function getUserId()
    {
        $query = $this->db->query("SELECT * FROM berita ");
        return $query->result();
    }

    public function cek_akses_2($username, $role_id)
    {

        $periksa = $this->db->get_where('pengguna', array('username' =>
        $this->session->userdata('username'), 'role_id' => ('2')));
        if ($periksa->num_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function cek_akses_3($username, $id_akses)
    {

        $periksa = $this->db->get_where('pengguna', array('username' =>
        $this->session->userdata('username'), 'role_id' => ('3')));
        if ($periksa->num_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }



    public function save()
    {
        $post = $this->input->post();
        if (isset($_POST['id_berita'])) { }




        $this->judul_berita = $post["judul_berita"];
        $this->tanggal = $post["tanggal"];
        $this->lokasi = $post["lokasi"];
        $this->isi_berita = $post["isi_berita"];
        $this->penulis = $post["penulis"];
        $this->id_dusun = $post["id_dusun"];
        $this->id_rt = $post["id_rt"];
        $this->id_rw = $post["id_rw"];
        $this->foto = $this->_uploadImage();

        $this->db->insert($this->_table, $this);
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/img/foto_Berita/';
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
        $this->id_berita = $post["id_berita"];
        $this->judul_berita = $post["judul_berita"];
        $this->tanggal = $post["tanggal"];
        $this->lokasi = $post["lokasi"];
        $this->isi_berita = $post["isi_berita"];
        $this->penulis = $post["penulis"];
        $this->id_dusun = $post["id_dusun"];
        $this->id_rt = $post["id_rt"];
        $this->id_rw = $post["id_rw"];
        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }
        $this->db->update($this->_table, $this, array('id_berita' => $post['id_berita']));
    }


    public function delete($id_berita)
    {
        $this->_deleteImage($id_berita);
        return $this->db->delete($this->_table, array("id_berita" => $id_berita));
    }



    private function _deleteImage($id_pengguna)
    {
        $pegawai = $this->getById($id_pengguna);
        if ($pegawai->foto != "01.jpg") {
            $filename = explode(".", $pegawai->foto)[0];
            return array_map('unlink', glob(FCPATH . "upload/profil/$filename.*"));
        }
    }

    public function ui_berita()
    {
        $databerita = $this->db->query("SELECT * FROM Berita order by id_berita")->result();
        return $databerita;
    }

    public function ui_beritahome()
    {
        $databerita = $this->db->query("SELECT * FROM Berita order by id_berita desc limit 1")->result();
        return $databerita;
    }

    public function readberita($id_berita)
    {
        return $this->db->get_where($this->_table, ["id_berita" => $id_berita])->row();
    }
}
