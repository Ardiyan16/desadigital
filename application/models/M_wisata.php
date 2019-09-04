<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_wisata extends CI_Model
{
    private $_table = "wisata";

    public $id_wisata;
    public $id_kategori;
    public $nama_wisata;
    public $deskripsi;
    public $address;
    public $longlat;
    public $id_dusun;

    public $foto = "default.jpg";

    public function rules()
    {
        return [

            [
                'field' => 'nama_wisata',
                'label' => 'nama_wisata',
                'rules' => 'required'
            ],

        ];
    }

    public function getAll()
    {
        $dataadmin = $this->db->query("SELECT * FROM wisata WHERE role_id = 2")->result();
        return $dataadmin;
    }

    public function getById($id_wisata)
    {
        return $this->db->get_where($this->_table, ["id_wisata" => $id_wisata])->row();
    }

    public function getUserId()
    {
        $query = $this->db->query("SELECT * FROM wisata ");
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
        if (isset($_POST['id_wisata'])) { }



        $this->id_kategori = $post["id_kategori"];
        $this->nama_wisata = $post["nama_wisata"];
        $this->deskripsi = $post["deskripsi"];
        $this->address = $post["address"];
        $this->longlat = $post["longlat"];
        $this->id_dusun = $post["id_dusun"];
        $this->foto = $this->_uploadImage();

        $this->db->insert($this->_table, $this);
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/img/foto_wisata/';
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
        $this->id_wisata = $post["id_wisata"];
        $this->id_kategori = $post["id_kategori"];
        $this->nama_wisata = $post["nama_wisata"];
        $this->deskripsi = $post["deskripsi"];
        $this->address = $post["address"];
        $this->longlat = $post["longlat"];
        $this->id_dusun = $post["id_dusun"];
        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }
        $this->db->update($this->_table, $this, array('id_wisata' => $post['id_wisata']));
    }




    // public function update()
    // {
    //     $post = $this->input->post();
    //     $this->id_berita = $post["id_berita"];
    //     $this->judul_berita = $post["judul_berita"];
    //     $this->tanggal = $post["tanggal"];
    //     $this->lokasi = $post["lokasi"];
    //     $this->isi_berita = $post["isi_berita"];
    //     $this->penulis = $post["penulis"];
    //     $this->id_dusun = $post["id_dusun"];
    //     $this->id_rt = $post["id_rt"];
    //     $this->id_rw = $post["id_rw"];
    //     if (!empty($_FILES["foto"]["name"])) {
    //         $this->foto = $this->_uploadImage();
    //     } else {
    //         $this->foto = $post["old_image"];
    //     }
    //     $this->db->update($this->_table, $this, array('id_berita' => $post['id_berita']));
    // }


    public function delete($id_wisata)
    {
        $this->_deleteImage($id_wisata);
        return $this->db->delete($this->_table, array("id_wisata" => $id_wisata));
    }



    private function _deleteImage($id_wisata)
    {
        $wisata = $this->getById($id_wisata);
        if ($wisata->foto != "01.jpg") {
            $filename = explode(".", $wisata->foto)[0];
            return array_map('unlink', glob(FCPATH . "assets/img/foto_wisata/$filename.*"));
        }
    }

    public function ui_wisata()
    {
        $datawisata = $this->db->query("SELECT * FROM wisata order by id_wisata desc")->result();
        return $datawisata;
    }

    public function ui_wisatahome()
    {
        $datawisata = $this->db->query("SELECT * FROM wisata order by id_wisata desc limit 1")->result();
        return $datawisata;
    }
}
