<?php
/**
* 
*/
class Model_kontak extends CI_Model
{
	
	function tampilkan_data()
	{
		return  $this->db->get_where('lab_artikel', array('artikel_katagori' => 'kontak'));
	}

	function get_user($id)
	{
		$this->db->select('*');
    	$this->db->from('lab_artikel');
    	$this->db->join('lab_user','lab_user.user_id = lab_artikel.user_id');
    	$this->db->where('artikel_id', $id);

    	return $query = $this->db->get();
    }

	function hapus($id)
	{
		$this->db->where('artikel_id', $id);
		$query = $this->db->get('lab_artikel');
		$row = $query->row();

		unlink("./foto_user/$row->artikel_gambar");

		$this->db->delete('lab_artikel', array('artikel_id' => $id));
	}
}