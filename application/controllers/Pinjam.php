<?php
/**
*
*/
class Pinjam extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_pinjam');
		$this->load->model('model_user');
	}

	function index()
	{
		$data['title'] = "Manajemen Peminjaman Ruangan Lab";
		$data['record'] = $this->model_pinjam->tampilkan_data();
		$this->template->load('template_backend','backend/pinjam/lihat_data',$data);
	}

	function lihat_data_detil()
	{
		$data['title'] = "Lihat Peminjaman";
		$id = $this->uri->segment(3);
		$data['record'] = $this->model_pinjam->get_user($id)->row_array();
		$this->template->load('template_backend','backend/pinjam/lihat_data_detil',$data);
	}

	function post()
	{
		if (isset($_POST['submit'])) {
			$data = array(
				'pinjam_judul' 	 			=> $this->input->post('pinjam_judul'),
				'pinjam_jenis_kegiatan'   	=> $this->input->post('pinjam_jenis_kegiatan'),
				'pinjam_deskripsi_kegiatan' => $this->input->post('pinjam_deskripsi_kegiatan'),
				'pinjam_waktu_mulai'   		=> $this->input->post('pinjam_waktu_mulai'),
				'pinjam_waktu_selesai'   	=> $this->input->post('pinjam_waktu_selesai'),
				'user_id'   				=> $this->input->post('user_id'),
				);
			$this->db->insert('lab_pinjam',$data);
			redirect('pinjam');
		} else {
			$data['title'] = 'Tambah Peminjaman';

			$data['user_profil_nama'] = $this->model_user->tampilkan_data()->result();

			$this->template->load('template_backend','backend/pinjam/form_input',$data);
		}
	}

	function edit()
	{
		if (isset($_POST['submit'])) {
			$id							= $this->input->post('pinjam_id',true);
			$pinjam_judul 	 			= $this->input->post('pinjam_judul',true);
			$pinjam_jenis_kegiatan   	= $this->input->post('pinjam_jenis_kegiatan',true);
			$pinjam_deskripsi_kegiatan	= $this->input->post('pinjam_deskripsi_kegiatan',true);
			$pinjam_waktu_mulai   		= $this->input->post('pinjam_waktu_mulai',true);
			$pinjam_waktu_selesai   	= $this->input->post('pinjam_waktu_selesai',true);
			$user_id	   				= $this->input->post('user_id',true);

			$data = array(
				'pinjam_judul' 	 			=> $this->input->post('pinjam_judul',true),
				'pinjam_jenis_kegiatan'   	=> $this->input->post('pinjam_jenis_kegiatan',true),
				'pinjam_deskripsi_kegiatan' => $this->input->post('pinjam_deskripsi_kegiatan',true),
				'pinjam_waktu_mulai'   		=> $this->input->post('pinjam_waktu_mulai',true),
				'pinjam_waktu_selesai'   	=> $this->input->post('pinjam_waktu_selesai',true),
				'user_id'   				=> $this->input->post('user_id',true),
				);

			$this->db->where('pinjam_id',$id);
			$this->db->update('lab_pinjam',$data);
			redirect('pinjam');
		} else {
			$data['title'] = "Edit pemateri";
			$id = $this->uri->segment(3);

			$data['user_profil_nama'] = $this->model_user->tampilkan_data()->result();
			$data['record'] = $this->model_pinjam->get_user($id)->row_array();
			$this->template->load('template_backend','backend/pinjam/form_edit',$data);
		}
	}

	function hapus()
	{
		$id = $this->uri->segment(3);
		$this->model_pinjam->hapus($id);
		redirect ('pinjam');
	}
}
