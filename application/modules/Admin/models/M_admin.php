<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model{

  function tampilkan_data()
	{
		$param = array('user_level' => 'admin');
		return $this->db->get_where('lab_user',$param);
	}

	function get_user($id)
	{
		$param = array('user_id'=>$id);
		return $this->db->get_where('lab_user',$param);
	}
	function insert($data){
		$this->db->insert('lab_user', $data);
	}
	function update($data, $id){
		$this->db->where('user_id', $id);
		$this->db->update('lab_user', $data);
	}
	function hapus($id)
	{
		$this->db->where('user_id', $id);
		$query = $this->db->get('lab_user');
		$row = $query->row();

		unlink("./foto_user/$row->user_profil_foto");

		$this->db->delete('lab_user', array('user_id' => $id));
	}

}
