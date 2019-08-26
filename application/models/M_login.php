<?php

class M_login extends CI_Model
{

	private $_table = "admin";

	public $id_admin;
	public $username;
	public $password;
	public $nama;


	public function rules()
	{
		return [
			[
				'field' => 'username',
				'label' => 'username',
				'rules' => 'required'
			],

			[
				'field' => 'password',
				'label' => 'password',
				'rules' => 'required'
			],


		];
	}

	function cek_login($username, $password)
	{
		$periksa = $this->db->get_where('admin', array('username' => $username, 'password' => $password));
		$user = $this->db->get_where('pengguna', ['username' => $username])->row_array();
		if ($user) {

			$datas = [
				'username' => $user['username']
			];
			$this->session->set_userdata($datas);
		}


		if ($periksa->num_rows() > 0) {
			return 1;
		} else {
			return 0;
		}
	}

	public function save()
	{
		$post = $this->input->post();
		$this->Id_admin = uniqid();
		$this->Username = $post["Username"];
		$this->Password = $post["Password"];
		$this->Nama_Depan = $post["Nama_Depan"];
		$this->Nama_Belakang = $post["Nama_Belakang"];
		$this->db->insert($this->_table, $this);
	}
}
