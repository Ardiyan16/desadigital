<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_event extends CI_Model
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

    public function rules()
    {
        return [


            [
                'field' => 'judul_event',
                'label' => 'judul event',
                'rules' => 'required'
            ],

            [
                'field' => 'foto',
                'label' => 'foto',
                'rules' => 'required'
            ],

            [
                'field' => 'tanggal_mulai',
                'label' => 'tanggal_mulai',
                'rules' => 'required'
            ],

            [
                'field' => 'tanggal_selesai',
                'label' => 'tanggal_selesai',
                'rules' => 'required'
            ],

            [
                'field' => 'id_dusun',
                'label' => 'id_dusun',
                'rules' => 'required'
            ],

            [
                'field' => 'id_rt',
                'label' => 'id_rt',
                'rules' => 'required'
            ],

            [
                'field' => 'id_rw',
                'label' => 'id_rw',
                'rules' => 'required'
            ]
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id_event)
    {
        return $this->db->get_where($this->_table, ["id_event" => $id_event])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_event = $post["id_event"];
        $this->judul_event = $post["judul_event"];
        $this->isi_event = $post["isi_event"];
        $this->foto->uploadfoto();
        $this->tangal_mulai = $post["tangal_mulai"];
        $this->tanggal_selesai = $post["tanggal_selesai"];
        $this->id_dusun = $post["id_dusun"];
        $this->id_rt = $post["id_rt"];
        $this->id_rw = $post["id_rw"];

        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_event = $post["id_event"];
        $this->judul_event = $post["judul_event"];
        $this->isi_event = $post["isi_event"];
        $this->foto;
        $this->tangal_mulai = $post["tangal_mulai"];
        $this->tanggal_selesai = $post["tanggal_selesai"];
        $this->id_dusun = $post["id_dusun"];
        $this->id_rt = $post["id_rt"];
        $this->id_rw = $post["id_rw"];


        $this->db->update($this->_table, $this, array('id_event' => $post['id_event']));
    }

    public function delete($id_event)
    {
        return $this->db->delete($this->_table, array("id_event" => $id_event));
    }

    private function uploadfoto()
    {
        $config['upload_path']          = './assets/img/foto_event/';
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
