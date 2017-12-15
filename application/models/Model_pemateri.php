<?php
/**
* 
*/
class Model_pemateri extends CI_Model
{
	
	function tampilkan_data()
	{
		return $this->db->get('pemateri');
	}

	function get_user($id)
	{
		$param = array('id_pemateri'=>$id);
		return $this->db->get_where('pemateri',$param);
	}

	function hapus($id)
	{
		$this->db->where('id_pemateri', $id);
		$query = $this->db->get('pemateri');
		$row = $query->row();

		unlink("./foto_user/$row->img_pemateri");

		$this->db->delete('pemateri', array('id_pemateri' => $id));
	}
}