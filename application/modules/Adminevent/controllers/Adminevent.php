<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminevent extends CI_Controller {

  function __construct()
	{
		parent::__construct();
    $this->load->model('Model_manajemen_event');
    $this->load->model('User/Model_user');
    if ($this->session->userdata('user_level') != 'admin') {
      $this->session->set_flashdata('cek', 'benar');
      $this->session->set_flashdata('error', 'Silahkan Login');
      redirect('Adminlogin');
    }else {
      return true;
    }
	}
	function index()
	{
    $data['title'] = "Manajemen Admin";
    $this->load->view('AdminTemplate/header',$data);
    $this->view();
    $this->load->view('AdminTemplate/footer');
	}
  public function view()
  {
		$data['record'] = $this->Model_manajemen_event->tampilkan_data();
		$this->load->view('lihat_data', $data);
  }
	function lihat_data_detil($id)
	{
		$data['title'] = "Lihat Data Event";
		$data['record'] = $this->Model_manajemen_event->get_user($id)->row_array();
    $data['records'] = $this->Model_manajemen_event->get_manifest_user($id)->result_array();
		// $data['jumlah'] = $this->model_manajemen_event->get_jumlah_peserta($id)->result();
$this->load->view('lihat_data_detil', $data);
	}

	public function post()
	{
		if (isset($_POST['judul_events'])) {
			$config['upload_path'] = './foto_artikel/';
			$config['allowed_types'] = 'jpg|png|gif';
      $config['max_size'] = 5000;
			$this->load->library('upload', $config);
			$this->upload->do_upload('img_poster_events');
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
				'img_poster_events'		=> $hasil['file_name']
				);
			$this->Model_manajemen_event->insert($data);
		} else {
			$data['title'] = 'Tambah Event';
			$data['nama_pemateri'] = $this->Model_manajemen_event->tampil_daftar_pemateri()->result();
			$data['desc_kategori_kegiatan'] = $this->Model_manajemen_event->tampil_daftar_kegiatan()->result();
			$data['desc_kategori_dev'] = $this->Model_manajemen_event->tampil_daftar_dev()->result();
			$this->load->view('form_input',$data);
		}
	}

	function edit($id){
		if (isset($_POST['judul_events'])) {
      if ($_FILES['img_poster_events']['name'] != ""){
        $config['upload_path'] = './foto_artikel/';
  			$config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 5000;
  			$this->load->library('upload', $config);
  			$this->upload->do_upload('img_poster_events');
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
  				'img_poster_events'		=> $hasil['file_name']
  				);
          $user_profil_foto_lama 	= $this->input->post('foto_poster_lama');
          $this->Model_manajemen_event->update($data,$id);
          unlink("./foto_artikel/$user_profil_foto_lama");
} else {
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
						'grade_events'			=> $this->input->post('grade_events',true)
						);
			}
		}
		else {
			$data['title'] = 'Edit Event';
			$data['record'] = $this->Model_manajemen_event->get_user($id)->row_array();
			$data['nama_pemateri'] = $this->Model_manajemen_event->tampil_daftar_pemateri()->result();
			$data['desc_kategori_kegiatan'] = $this->Model_manajemen_event->tampil_daftar_kegiatan()->result();
			$data['desc_kategori_dev'] = $this->Model_manajemen_event->tampil_daftar_dev()->result();

      $this->load->view('form_edit', $data);
		}
	}

	function hapus($id)
	{
		$this->Model_manajemen_event->hapus($id);
	}

	function peserta_event_tambah()
	{
		if (isset($_POST['id_events'])) {

			$data = array(
				'id_events' 		=> $this->input->post('id_events'),
				'user_id'   		=> $this->input->post('user_id'),
				'status_kehadiran'	=> 'Tidak Hadir',
				'status_pembayaran'	=> 'Belum Lunas'
				);
			$this->db->insert('events_manifest_user',$data);
		}
		else
		{
			$data['title'] = 'Tambah Peserta';
			$data['record'] = $this->Model_user->tampilkan_data();
			$data['record2'] = $this->Model_manajemen_event->get_manifest_user($id);
      $this->load->view('form_input_peserta', $data);
		}
	}
	function peserta_hadir($id)
	{
    $bayar = $this->input->post('hadir');
    $this->Model_manajemen_event->update_kehadiran($bayar, $id);
	}

	function peserta_bayar($id)
	{
    $bayar = $this->input->post('bayar');
    $this->Model_manajemen_event->update_pembayaran($bayar, $id);
	}

	function peserta_hapus($id)
	{
		$this->Model_manajemen_event->hapus_peserta($id);
	}

}
