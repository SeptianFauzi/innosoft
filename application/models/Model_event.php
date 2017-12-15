<?php
class Model_event extends CI_Model
{
	function get_timeline(){
		$query = "SELECT * FROM events ORDER BY id_events DESC";
		return $this->db->query($query);
	}

	function tampilkan_data($id){
		return $this->db->get_where('events',array('id_events' => $id));
	}
}