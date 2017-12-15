<?php
class Manajemen_event extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_manajemen_event');
		$this->load->model('model_user');
		$this->load->library('user_agent');
	}

	function index()
	{
		$data['title'] = "Manajemen Event";
		$data['record'] = $this->model_manajemen_event->tampilkan_data();
		$this->template->load('template_backend','backend/manajemen_event/lihat_data',$data);
	}

	function lihat_data_detil()
	{
		$data['title'] = "Lihat Data Event";
		$id = $this->uri->segment(3);
		$data['record'] = $this->model_manajemen_event->get_user($id)->row_array();
		// $data['jumlah'] = $this->model_manajemen_event->get_jumlah_peserta($id)->result();
		$this->template->load('template_backend','backend/manajemen_event/lihat_data_detil',$data);
	}

	function post()
	{
		if (isset($_POST['submit'])) {
			$config['upload_path'] = './foto_artikel/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);
			$gambar = "img_poster_events";
			$this->upload->do_upload($gambar);
			$hasil = $this->upload->data();

			$data = array(
				'id_status'				=> $this->input->post('id_status'),
				'judul_events'			=> $this->input->post('judul_events'),
				'judul_events'			=> $this->input->post('judul_events'),
				'id_kategori_kegiatan'	=> $this->input->post('id_kategori_kegiatan'),
				'id_kategori_dev'		=> $this->input->post('id_kategori_dev'),
				'id_pemateri'			=> $this->input->post('id_pemateri'),
				'waktu_events'			=> $this->input->post('waktu_events'),
				'kuota_events'			=> $this->input->post('kuota_events'),
				'kuota_max_events'		=> $this->input->post('kuota_max_events'),
				'lokasi_events'			=> $this->input->post('lokasi_events'),
				'software_events'		=> $this->input->post('software_events'),
				'desc_events'			=> $this->input->post('desc_events'),
				'grade_events'			=> $this->input->post('grade_events'),
				'img_poster_events'		=> $hasil['file_name'],
				);
			$this->db->insert('events',$data);
			redirect('manajemen_event');
		} else {
			$data['title'] = 'Tambah Event';
			$data['nama_pemateri'] = $this->model_manajemen_event->tampil_daftar_pemateri()->result();
			$data['desc_kategori_kegiatan'] = $this->model_manajemen_event->tampil_daftar_kegiatan()->result();
			$data['desc_kategori_dev'] = $this->model_manajemen_event->tampil_daftar_dev()->result();

			$this->template->load('template_backend','backend/manajemen_event/form_input',$data);
		}
	}

	function edit(){
		if (isset($_POST['submit'])) {
			$config['upload_path'] = './foto_artikel/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);
			$gambar = "img_poster_events";
			$this->upload->do_upload($gambar);

			$hasil 					= $this->upload->data();

			$id_events				= $this->input->post('id_events',true);
			$id_status				= $this->input->post('id_status',true);
			$judul_events			= $this->input->post('judul_events',true);
			$id_kategori_kegiatan	= $this->input->post('id_kategori_kegiatan',true);
			$id_kategori_dev		= $this->input->post('id_kategori_dev',true);
			$id_pemateri			= $this->input->post('id_pemateri',true);
			$waktu_events			= $this->input->post('waktu_events',true);
			$kuota_events			= $this->input->post('kuota_events',true);
			$kuota_max_events		= $this->input->post('kuota_max_events',true);
			$lokasi_events			= $this->input->post('lokasi_events',true);
			$software_events		= $this->input->post('software_events',true);
			$desc_events			= $this->input->post('desc_events',true);
			$grade_events			= $this->input->post('grade_events',true);
			$img_poster_events		= $hasil['file_name'];

			if (empty($img_poster_events)) {
				$data = array(
						'id_events'				=> $this->input->post('id_events'),
						'id_status'				=> $this->input->post('id_status'),
						'judul_events'			=> $this->input->post('judul_events'),
						'id_kategori_kegiatan'	=> $this->input->post('id_kategori_kegiatan'),
						'id_kategori_dev'		=> $this->input->post('id_kategori_dev'),
						'id_pemateri'			=> $this->input->post('id_pemateri'),
						'waktu_events'			=> $this->input->post('waktu_events'),
						'kuota_events'			=> $this->input->post('kuota_events'),
						'kuota_max_events'		=> $this->input->post('kuota_max_events'),
						'lokasi_events'			=> $this->input->post('lokasi_events'),
						'software_events'		=> $this->input->post('software_events',true),
						'desc_events'			=> $this->input->post('desc_events',true),
						'grade_events'			=> $this->input->post('grade_events',true),
						);
			}
			else {
				$data = array(
						'id_events'				=> $this->input->post('id_events'),
						'id_status'				=> $this->input->post('id_status'),
						'judul_events'			=> $this->input->post('judul_events'),
						'id_kategori_kegiatan'	=> $this->input->post('id_kategori_kegiatan'),
						'id_kategori_dev'		=> $this->input->post('id_kategori_dev'),
						'id_pemateri'			=> $this->input->post('id_pemateri'),
						'waktu_events'			=> $this->input->post('waktu_events'),
						'kuota_events'			=> $this->input->post('kuota_events'),
						'kuota_max_events'		=> $this->input->post('kuota_max_events'),
						'lokasi_events'			=> $this->input->post('lokasi_events'),
						'software_events'		=> $this->input->post('software_events',true),
						'desc_events'			=> $this->input->post('desc_events',true),
						'grade_events'			=> $this->input->post('grade_events',true),
						'img_poster_events'		=> $hasil['file_name']
						);
			}
			$this->db->where('id_events',$id_events);
			$this->db->update('events',$data);
			redirect('manajemen_event');
		}
		else{
			$data['title'] = 'Edit Event';

			$id = $this->uri->segment(3);
			$data['record'] = $this->model_manajemen_event->get_user($id)->row_array();

			$data['nama_pemateri'] = $this->model_manajemen_event->tampil_daftar_pemateri()->result();
			$data['desc_kategori_kegiatan'] = $this->model_manajemen_event->tampil_daftar_kegiatan()->result();
			$data['desc_kategori_dev'] = $this->model_manajemen_event->tampil_daftar_dev()->result();

			$this->template->load('template_backend','backend/manajemen_event/form_edit',$data);
		}
	}

	function hapus()
	{
		$id = $this->uri->segment(3);
		$this->model_manajemen_event->hapus($id);
		redirect ('manajemen_event');
	}

	function peserta_event()
	{
		$data['title'] = 'Peserta Event';
		$id = $this->uri->segment(3);
		$data['record'] = $this->model_manajemen_event->get_manifest_user($id);
		$this->template->load('template_backend','backend/manajemen_event/lihat_peserta',$data);
	}

	function peserta_event_tambah()
	{
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])) {

			$data = array(
				'id_events' 		=> $this->input->post('id_events'),
				'user_id'   		=> $this->input->post('user_id'),
				'status_kehadiran'	=> 'Tidak Hadir',
				'status_pembayaran'	=> 'Belum Lunas'
				);
			$this->db->insert('events_manifest_user',$data);
			redirect($this->agent->referrer());
			// windows.history.go(-1);
			// redirect('peserta_event_tambah/.$id');
		}
		else
		{
			$data['title'] = 'Tambah Peserta';
			$data['record'] = $this->model_user->tampilkan_data();
			$data['record2'] = $this->model_manajemen_event->get_manifest_user($id);
			$data['uri'] = $id;
			$this->template->load('template_backend','backend/manajemen_event/lihat_peserta', $data);

		}
	}

	function peserta_hadir()
	{
		$data['uri'] = $this->uri->segment(3);
		$data['record'] = $this->model_manajemen_event->get_kehadiran($data);
		if ($status == 'Tidak Hadir') {
			$data = array('status_kehadiran' => 'Hadir');
		} else
		{
			$data = array('status_kehadiran' => 'Tidak Hadir');
		}

		$this->db->update('status_kehadiran',$status);
	}

	function peserta_bayar($id)
	{
		$data['record'] = $this->Model_manajemen_event->get_kehadiran($id);
		if ($status == 'Tidak Hadir') {
			$data = array('status_pembayaran' => 'Hadir');
		} else
		{
			$data = array('status_pembayaran' => 'Tidak Hadir');
		}

		$this->db->update('status_pembayaran', $status);
	}

	function peserta_hapus()
	{
		$id = $this->uri->segment(3);
		$this->model_manajemen_event->hapus_peserta($id);
		redirect($this->agent->referrer());
		// redirect ('manajemen_event');
	}
}
?>
