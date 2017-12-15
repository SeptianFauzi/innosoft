<?php
class Model_front_home extends CI_Model
{
	function get_slider(){
		/*$this->db->get('lab_artikel');
		$this->db->order_by('artikel_id','ASC');
		$query = $this->db->get();*/
		$query = "Select * FROM lab_artikel ORDER BY artikel_id DESC limit 3";
		return $this->db->query($query);
	}

	function get_timeline(){
		$query = "Select * FROM lab_artikel ORDER BY artikel_id DESC limit 7";
		return $this->db->query($query);
	}
	
	function semat_rpl()
	{
		return $this->db->get_where('lab_artikel', array('artikel_katagori' => 'berita_rpl', 'artikel_status' => 'aktif', 'artikel_semat' => 'ya'));
	}
	
	function semat_ti()
	{
		return $this->db->get_where('lab_artikel', array('artikel_katagori' => 'berita_ti', 'artikel_status' => 'aktif', 'artikel_semat' => 'ya'));
	}
	
	function semat_uika()
	{
		return $this->db->get_where('lab_artikel', array('artikel_katagori' => 'berita_uikal', 'artikel_status' => 'aktif', 'artikel_semat' => 'ya'));
	}
	
	function semat_event()
	{
		return $this->db->get_where('lab_artikel', array('artikel_katagori' => 'berita_event', 'artikel_status' => 'aktif', 'artikel_semat' => 'ya'));
	}

	function get_user($id)
	{
		$param = array('user_id'=>$id);
		return $this->db->get_where('lab_user',$param);
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