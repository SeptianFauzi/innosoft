<?php
/**
*
*/
class Pemateri extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_pemateri');
	}

	function index()
	{
		$data['title'] = "Manajemen Pemateri";
		$data['record'] = $this->model_pemateri->tampilkan_data();
		$this->template->load('template_backend','backend/pemateri/lihat_data',$data);
	}

	function lihat_data_detil()
	{
		$data['title'] = "Lihat pemateri";
		$id = $this->uri->segment(3);
		$data['record'] = $this->model_pemateri->get_user($id)->row_array();
		$this->template->load('template_backend','backend/pemateri/lihat_data_detil',$data);
	}

	function post()
	{
		if (isset($_POST['submit'])) {
			$config['upload_path'] = './foto_user/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);
			$gambar = "img_pemateri";
			$this->upload->do_upload($gambar);

			$hasil = $this->upload->data();

			$data = array(
				'id_pemateri'  	 	=> $this->input->post('id_pemateri'),
				'nama_pemateri'   	=> $this->input->post('nama_pemateri'),
				'telp_pemateri'   	=> $this->input->post('telp_pemateri'),
				'email_pemateri'   	=> $this->input->post('email_pemateri'),
				'profil_pemateri'   => $this->input->post('profil_pemateri'),
				'img_pemateri'	   	=> $hasil['file_name']
				);
			$this->db->insert('pemateri',$data);
			redirect('pemateri');
		} else {
			$data['title'] = 'Tambah user';
			$this->template->load('template_backend','backend/pemateri/form_input',$data);
		}
	}

	function edit()
	{
		if (isset($_POST['submit'])) {
			$config['upload_path'] = './foto_user/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);
			$gambar = "img_pemateri";
			$this->upload->do_upload($gambar);

			$hasil 					= $this->upload->data();

			$id 					= $this->input->post('id_pemateri',true);
			$nama_pemateri			= $this->input->post('nama_pemateri',true);
			$telp_pemateri			= $this->input->post('telp_pemateri',true);
			$email_pemateri			= $this->input->post('email_pemateri',true);
			$profil_pemateri		= $this->input->post('profil_pemateri',true);
			$img_pemateri		   	= $hasil['file_name'];

			if (empty($img_pemateri)) {
				$data = array(
						'nama_pemateri'  	 	=> $this->input->post('nama_pemateri',true),
						'telp_pemateri' 		=> $this->input->post('telp_pemateri',true),
						'email_pemateri'   		=> $this->input->post('email_pemateri',true),
						'profil_pemateri'   	=> $this->input->post('profil_pemateri',true)
						);
			}
			else {
				$data = array(
						'nama_pemateri'  	 	=> $this->input->post('nama_pemateri',true),
						'telp_pemateri' 		=> $this->input->post('telp_pemateri',true),
						'email_pemateri'   		=> $this->input->post('email_pemateri',true),
						'profil_pemateri'   	=> $this->input->post('profil_pemateri',true),
						'img_pemateri'			=> $img_pemateri
						);
			}
			$this->db->where('id_pemateri',$id);
			$this->db->update('pemateri',$data);
			redirect('pemateri');
		} else {
			$data['title'] = "Edit pemateri";
			$id = $this->uri->segment(3);

			$data['record'] = $this->model_pemateri->get_user($id)->row_array();
			$this->template->load('template_backend','backend/pemateri/form_edit',$data);
		}
	}

	function hapus()
	{
		$id = $this->uri->segment(3);
		$this->model_pemateri->hapus($id);
		redirect ('pemateri');
	}
}
