<?php
class Model_artikel_lihat extends CI_Model
{
	function tampilkan_data($id){
		return $this->db->get_where('lab_artikel',array('artikel_slug' => $id));
	}
}