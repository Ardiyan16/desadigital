<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_oleh extends CI_Model
{
    private $_table = "oleh_oleh";

    public $id;
    public $nama;
    public $alamat;
    public $harga;

    public $foto = "default.jpg";

    public function rules()
    {
        return [

            [
                'field' => 'nama',
                'label' => 'nama',
                'rules' => 'required'
            ],

        ];
    }

    public function getAll()
    {
        $dataadmin = $this->db->query("SELECT * FROM pengguna WHERE role_id = 2")->result();
        return $dataadmin;
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function getUserId()
    {
        $query = $this->db->query("SELECT * FROM oleh_oleh ");
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
        if (isset($_POST['id'])) { }




        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->harga = $post["harga"];

        $this->foto = $this->_uploadImage();

        $this->db->insert($this->_table, $this);
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/img/foto_oleh/';
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
        $this->id = $post["id"];
        $this->nama = $post["nama"];
        $this->alamat = $post["alamat"];
        $this->harga = $post["harga"];

        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }


    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id" => $id));
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
        return $this->db->get($this->_table)->result();
    }
}
