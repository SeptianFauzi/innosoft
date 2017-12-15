<?php
/**
* 
*/
class Artikel_event extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_artikel_event');
		$this->load->model('model_user');
	}

	function index()
	{
		$data['title'] = "Manajemen Artikel Event";
		$data['record'] = $this->model_artikel_event->tampilkan_data();
		$this->template->load('template_backend','backend/artikel_event/lihat_data',$data);
	}

	function lihat_data_detil()
	{
		$data['title'] = "Lihat Artikel Event";
		$id = $this->uri->segment(3);
		$data['record'] = $this->model_artikel_event->get_user($id)->row_array();
		$this->template->load('template_backend','backend/artikel_event/lihat_data_detil',$data);
	}

	function post()
	{
		if (isset($_POST['submit'])) {
			$config['upload_path'] = './foto_artikel/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);
			$gambar = "artikel_gambar";
			$this->upload->do_upload($gambar);
			
			$hasil = $this->upload->data();
			
			$data = array(
				'artikel_judul'			=> $this->input->post('artikel_judul'),
				'artikel_slug'			=> $this->input->post('artikel_slug'),
				'artikel_isi_ringkas'	=> $this->input->post('artikel_isi_ringkas'),
				'artikel_isi'			=> $this->input->post('artikel_isi'),
				'artikel_katagori'		=> $this->input->post('artikel_katagori'),
				'artikel_terbit'		=> $this->input->post('artikel_terbit'),
				'artikel_status'		=> $this->input->post('artikel_status'),
				'user_id'				=> $this->input->post('user_id'),
				'artikel_semat'			=> $this->input->post('artikel_semat'),
				'artikel_gambar'		=> $hasil['file_name']
				);
			$this->db->insert('lab_artikel',$data);
			redirect('artikel_event');
		} else {
			$data['title'] = 'Tambah Artikel Event';
			$data['user_profil_nama'] = $this->model_user->tampilkan_data()->result();
			$this->template->load('template_backend','backend/artikel_event/form_input',$data);
		}
	}

	function edit()
	{
		if (isset($_POST['submit'])) {
			$config['upload_path'] = './foto_artikel/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);
			$gambar = "artikel_gambar";
			$this->upload->do_upload($gambar);

			$hasil 					= $this->upload->data();

			$artikel_id				= $this->input->post('artikel_id',true);
			$artikel_judul			= $this->input->post('artikel_judul',true);
			$artikel_slug			= $this->input->post('artikel_slug',true);
			$artikel_isi_ringkas	= $this->input->post('artikel_isi_ringkas',true);
			$artikel_isi			= $this->input->post('artikel_isi',true);
			$artikel_katagori		= $this->input->post('artikel_katagori',true);
			$artikel_terbit			= $this->input->post('artikel_terbit',true);
			$artikel_status			= $this->input->post('artikel_status',true);
			$user_id				= $this->input->post('user_id',true);
			$artikel_semat			= $this->input->post('artikel_semat',true);
			$artikel_gambar			= $hasil['file_name'];

			if (empty($artikel_gambar)) {
				$data = array(
						'artikel_id'			=> $this->input->post('artikel_id'),
						'artikel_judul'			=> $this->input->post('artikel_judul'),
						'artikel_slug'			=> $this->input->post('artikel_slug'),
						'artikel_isi_ringkas'	=> $this->input->post('artikel_isi_ringkas'),
						'artikel_isi'			=> $this->input->post('artikel_isi'),
						'artikel_katagori'		=> $this->input->post('artikel_katagori'),
						'artikel_terbit'		=> $this->input->post('artikel_terbit'),
						'artikel_status'		=> $this->input->post('artikel_status'),
						'user_id'				=> $this->input->post('user_id'),
						'artikel_semat'			=> $this->input->post('artikel_semat')
						);
			}
			else {
				$this->model_artikel_event->hapus_gambar($artikel_id);
				$data = array(
						'artikel_id'			=> $this->input->post('artikel_id'),
						'artikel_judul'			=> $this->input->post('artikel_judul'),
						'artikel_slug'			=> $this->input->post('artikel_slug'),
						'artikel_isi_ringkas'	=> $this->input->post('artikel_isi_ringkas'),
						'artikel_isi'			=> $this->input->post('artikel_isi'),
						'artikel_katagori'		=> $this->input->post('artikel_katagori'),
						'artikel_terbit'		=> $this->input->post('artikel_terbit'),
						'artikel_status'		=> $this->input->post('artikel_status'),
						'user_id'				=> $this->input->post('user_id'),
						'artikel_semat'			=> $this->input->post('artikel_semat'),
						'artikel_gambar'		=> $hasil['file_name']
						);
			}
			$this->db->where('artikel_id',$artikel_id);
			$this->db->update('lab_artikel',$data);
			redirect('artikel_event');
		} else {
			$data['title'] = "Edit Artikel Event";
			$id = $this->uri->segment(3);

			$data['record'] = $this->model_artikel_event->get_user($id)->row_array();
			$data['user_profil_nama'] = $this->model_user->tampilkan_data()->result();
			$this->template->load('template_backend','backend/artikel_event/form_edit',$data);
		}
	}

	function hapus()
	{
		$id = $this->uri->segment(3);
		$this->model_artikel_event->hapus($id);
		redirect ('artikel_event');
	}
}