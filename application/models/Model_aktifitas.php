<?php
class Model_aktifitas extends CI_Model
{
	function get_timeline(){
		$query = "SELECT * FROM lab_artikel ORDER BY artikel_id DESC";
		return $this->db->query($query);
	}

	function get_timeline_rpl(){
		$query = "SELECT * FROM lab_artikel WHERE lab_artikel.artikel_katagori = 'berita_rpl' ORDER BY artikel_id DESC";
		return $this->db->query($query);
	}

	function get_timeline_ti(){
		$query = "SELECT * FROM lab_artikel WHERE lab_artikel.artikel_katagori = 'berita_ti' ORDER BY artikel_id DESC";
		return $this->db->query($query);
	}

	function get_timeline_uika(){
		$query = "SELECT * FROM lab_artikel WHERE lab_artikel.artikel_katagori = 'berita_uika' ORDER BY artikel_id DESC";
		return $this->db->query($query);
	}

	function get_timeline_event(){
		$query = "SELECT * FROM lab_artikel WHERE lab_artikel.artikel_katagori = 'berita_event' ORDER BY artikel_id DESC";
		return $this->db->query($query);
	}
}