<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_superuser extends CI_Model
{
    private $_table = "pengguna";

    public $id_pengguna;
    public $nama_lengkap;
    public $tempat_lahir;
    public $tanggal_lahir;
    public $alamat;
    public $no_telepon;
    public $jenis_kelamin;
    public $status;
    public $email;
    public $username;
    public $password;
    public $foto = "default.jpg";


    public function rules()
    {
        return [

            [
                'field' => 'nama_lengkap',
                'label' => 'nama_lengkap',
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
        return $this->db->get_where($this->_table, ["id_pengguna" => $id])->row();
    }

    public function getUserId()
    {
        $query = $this->db->query("SELECT * FROM pengguna WHERE role_id =3");
        return $query->result();
    }

    public function cek_akses_adm($email, $id_akses)
    {

        $periksa = $this->db->get_where('pengguna', array('email' =>
        $this->session->userdata('email'), 'id_akses' => ('adm')));
        if ($periksa->num_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function cek_akses_3($email, $id_akses)
    {

        $periksa = $this->db->get_where('pengguna', array('email' =>
        $this->session->userdata('email'), 'role_id' => ('3')));
        if ($periksa->num_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }



    public function save()
    {
        $post = $this->input->post();
        if (isset($_POST['id_pengguna'])) { }

        $this->role_id = 3;
        $this->nama_lengkap = $post["nama_lengkap"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tanggal_lahir = $post["tanggal_lahir"];
        $this->alamat = $post["alamat"];
        $this->no_telepon = $post["no_telepon"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->status = $post["status"];
        $this->email = $post["email"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->foto = $this->_uploadImage();


        $this->db->insert($this->_table, $this);
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/img/foto_profil/';
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




    public function delete($id_pengguna)
    {
        $this->_deleteImage($id_pengguna);
        return $this->db->delete($this->_table, array("id_pengguna" => $id_pengguna));
    }



    private function _deleteImage($id_pengguna)
    {
        $pegawai = $this->getById($id_pengguna);
        if ($pegawai->foto != "01.jpg") {
            $filename = explode(".", $pegawai->foto)[0];
            return array_map('unlink', glob(FCPATH . "upload/profil/$filename.*"));
        }
    }
}
