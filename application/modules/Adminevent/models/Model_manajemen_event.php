<?php
/**
*
*/
class Model_manajemen_event extends CI_Model
{

	public function tampilkan_data()
	{
		$this->db->select('*');
    	$this->db->from('events');
    	$this->db->join('events_kategori_kegiatan','events_kategori_kegiatan.id_kategori_kegiatan = events.id_kategori_kegiatan');
		return  $query = $this->db->get();
	}
	public function insert($data){
		$this->db->insert('events', $data);
	}
	public function hapus($id){
		$this->db->where('id_events', $id);
		$this->db->delete('events');
	}
	public function get_user($id)
	{
			$this->db->select('*, events.id_events');
    	$this->db->from('events');
    	$this->db->join('events_kategori_kegiatan','events_kategori_kegiatan.id_kategori_kegiatan = events.id_kategori_kegiatan');
    	$this->db->join('events_kategori_development','events_kategori_development.id_kategori_dev = events.id_kategori_dev');
    	// $this->db->join('events_kategori_teknologi','events_kategori_teknologi.');
    	$this->db->join('pemateri','pemateri.id_pemateri = events.id_pemateri');
    	$this->db->join('events_manifest_user','events_manifest_user.id_events = events.id_events','left');
			$this->db->join('events_materi', 'events_materi.id_materi_events = events.id_materi_events','left');
    	$this->db->where('events.id_events', $id);

		// $this->db->select_sum('id_events_manifest');
		// Produces: SELECT SUM(age) as age FROM members
    	return $this->db->get();
	}
function update($data,$id){
	$this->db->where('id_events', $id);
	$this->db->update('events', $data);
}
	// function get_jumlah_peserta($id)
	// {
	// 	$this->db->select_sum('id_events','jumlah');
	// 	return $query = $this->db->get_where('events_manifest_user',array('id_events' => $id));
	// }

	public function get_manifest_user($id)
	{

		$this->db->select('*');
		$this->db->from('events_manifest_user');
		$this->db->join('lab_user','lab_user.user_id = events_manifest_user.user_id');
		$this->db->where('events_manifest_user.id_events',$id);
		//echo $this->db->last_query();
		return $query = $this->db->get();
	}

	public function tampil_daftar_pemateri(){
		return $this->db->get('pemateri');
	}

	public function tampil_daftar_kegiatan(){
		return $this->db->get('events_kategori_kegiatan');
	}

	public function tampil_daftar_dev(){
		return $this->db->get('events_kategori_development');
	}

	public function get_kehadiran($id)
	{
		$this->db->select('status_kehadiran');
		return $status = $this->db->get_where('events_manifest_user',array('id_events_manifest' => $id));
	}

	public function hapus_peserta($id)
	{
		$this->db->delete('events_manifest_user', array('user_id' => $id));
	}
	function update_pembayaran($bayar, $id){
		$this->db->set('status_pembayaran',$bayar);
		$this->db->where('id_events_manifest', $id);
		$this->db->update('events_manifest_user');
	}
	function update_kehadiran($bayar, $id){
		$this->db->set('status_kehadiran',$bayar);
		$this->db->where('id_events_manifest', $id);
		$this->db->update('events_manifest_user');
}
}
