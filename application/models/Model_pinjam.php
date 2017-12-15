<?php
/**
* 
*/
class Model_pinjam extends CI_Model
{
	
	function tampilkan_data()
	{
		return $this->db->get('lab_pinjam');
	}

	function get_user($id)
	{
		$this->db->select('*');
    	$this->db->from('lab_pinjam');
    	$this->db->join('lab_user','lab_user.user_id = lab_pinjam.user_id');
    	$this->db->where('pinjam_id', $id);

    	return $query = $this->db->get();
    }

	function hapus($id)
	{
		$this->db->where('pinjam_id', $id);
		$query = $this->db->get('lab_pinjam');
		$row = $query->row();
		$this->db->delete('lab_pinjam', array('pinjam_id' => $id));
	}
}