<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_event extends CI_Model
{
    private $_table = "event_desa";

    public $id_event;
    public $judul_event;
    public $isi_event;
    public $foto;
    public $tanggal_mulai;
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

        ];
    }

    public function getAll()
    {
        $event = $this->db->query("SELECT event_desa.id_event, view_event.judul_event, view_event.isi_event, view_event.foto, view_event.tanggal_mulai, view_event.tanggal_selesai, view_event.nama_dusun, view_event.rt, view_event.rw FROM event_desa, view_event")->result();
        return $event;
    }

    public function getById($id_event)
    {
        return $this->db->get_where($this->_table, ["id_event" => $id_event])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->judul_event = $post["judul_event"];
        $this->isi_event = $post["isi_event"];
        $this->foto = $this->uploadfoto();
        $this->tanggal_mulai = $post["tanggal_mulai"];
        $this->tanggal_selesai = $post["tanggal_selesai"];
        $this->id_dusun = $post["id_dusun"];
        $this->id_rt = $post["id_rt"];
        $this->id_rw = $post["id_rw"];

        $this->db->insert($this->_table, $this);
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

    public function update()
    {
        $post = $this->input->post();
        $this->judul_event = $post["judul_event"];
        $this->isi_event = $post["isi_event"];
        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->uploadfoto();
        } else {
            $this->foto = $post["old_image"];
        }
        $this->tanggal_mulai = $post["tanggal_mulai"];
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

    public function ui()
    {
        $dataevent = $this->db->query("SELECT * FROM event_desa order by id_event")->result();
        return $dataevent;
    }

    public function uihome()
    {
        $dataevent = $this->db->query("SELECT * FROM event_desa order by id_event desc limit 1")->result();
        return $dataevent;
    }
}
