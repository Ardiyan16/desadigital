<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_kritik extends CI_Model
{
    private $_table = "kritiksaran";
    private $table = "pengguna";


    public $id;
    public $nik;
    public $ksdm;



    public function rules()
    {
        return [

            [
                'field' => 'nik',
                'label' => 'nik',
                'rules' => 'required'
            ],

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->v_kritik)->result();
    }

    public function getUserId()
    {


        $query = $this->db->query("SELECT * FROM v_kritik");
        return $query->result();
    }


    public function getById($kodeapbd)
    {
        return $this->db->get_where($this->_table, ["kodeapbd" => $kodeapbd])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        if (isset($_POST['id'])) { }


        $this->nik = $post["nik"];
        $this->ksdm = $post["ksdm"];


        $this->db->insert($this->_table, $this);
    }



    public function delete($id)
    {

        return $this->db->delete($this->_table, array("id" => $id));
    }
}
