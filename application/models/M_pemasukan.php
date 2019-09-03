<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_pemasukan extends CI_Model
{
    private $_table = "anggaran_apbdesa";


    public $id;
    public $jumlah_anggaran;
    public $tahun;



    public function rules()
    {
        return [

            [
                'field' => 'jumlah_anggaran',
                'label' => 'jumlah_anggaran',
                'rules' => 'required'
            ],

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        if (isset($_POST['id'])) { }


        $this->jumlah_anggaran = $post["jumlah_anggaran"];
        $this->tahun = $post["tahun"];


        $this->db->insert($this->_table, $this);
    }


    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->jumlah_anggaran = $post["jumlah_anggaran"];
        $this->tahun = $post["tahun"];


        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {

        return $this->db->delete($this->_table, array("id" => $id));
    }
}
