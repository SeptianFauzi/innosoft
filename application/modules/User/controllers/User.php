<?php
/**
*
*/
class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_user');
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
$data['title'] = "Manajemen user";
$this->load->view('AdminTemplate/header',$data);
$this->view();
$this->load->view('AdminTemplate/footer');
	}
function view(){
			$data['record'] = $this->Model_user->tampilkan_data();
			$this->load->view('lihat_data', $data);
}
	function lihat_data_detil($id)
	{
		$data['title'] = "Lihat user";
		$data['record'] = $this->Model_user->get_user($id)->row_array();
		$this->load->view('lihat_data_detil',$data);
	}
	public function post(){
		if(isset($_POST['user_profil_nama'])){
	$config['upload_path'] = './foto_user/';
  $config['allowed_types'] = 'jpg|png|gif';
  $config['max_size'] = 5000;
  $this->load->library('upload', $config);

  if (!$this->upload->do_upload('user_profil_foto')) {
    $error = array('error' => $this->upload->display_errors());
    echo json_encode($error);
  }
  else{
    $gambar = $this->upload->data();
    $success = ['success' => $gambar['file_name']];
    echo json_encode($success);
		$data = array(
			'user_username'  	 	=> $this->input->post('user_username'),
			'user_pass'   			=> md5($this->input->post('user_pass')),
			'user_level'   			=> $this->input->post('user_level'),
			'user_status'   		=> $this->input->post('user_status'),
			'user_profil_nama'   	=> $this->input->post('user_profil_nama'),
			'user_profil_lahir'   	=> $this->input->post('user_profil_lahir'),
			'user_profil_notelp'  	=> $this->input->post('user_profil_notelp'),
			'user_profil_email'   	=> $this->input->post('user_profil_email'),
			'user_profil_pekerjaan' => $this->input->post('user_profil_pekerjaan'),
			'user_profil_instansi'  => $this->input->post('user_profil_instansi'),
			'user_profil_alamat'   	=> $this->input->post('user_profil_alamat'),
			'user_profil_foto'	   	=> $gambar['file_name']
			);
		$this->Model_user->insert($data);
  }
}
else {
	$this->load->view('form_input');
}
}
	function edit($id)
	{
		if (isset($_POST['user_profil_nama'])) {
			if ($_FILES['user_profil_foto']['name'] != "") {
				$config['upload_path'] = './foto_user/';
				$config['allowed_types'] = 'gif|jpg|png';
				$this->load->library('upload', $config);
				$this->upload->do_upload('user_profil_foto');

				$gambar 					= $this->upload->data();
				$data = array(
					'user_username'  	 	=> $this->input->post('user_username',true),
					'user_pass'   			=> md5($this->input->post('user_pass',true)),
					'user_level'   			=> $this->input->post('user_level',true),
					'user_status'   		=> $this->input->post('user_status',true),
					'user_profil_nama'   	=> $this->input->post('user_profil_nama',true),
					'user_profil_lahir'   	=> $this->input->post('user_profil_lahir',true),
					'user_profil_notelp'  	=> $this->input->post('user_profil_notelp',true),
					'user_profil_email'   	=> $this->input->post('user_profil_email',true),
					'user_profil_pekerjaan' => $this->input->post('user_profil_pekerjaan',true),
					'user_profil_instansi'  => $this->input->post('user_profil_instansi',true),
					'user_profil_alamat'  	=> $this->input->post('user_profil_alamat',true),
					'user_profil_foto'	   	=> $gambar['file_name']
				);
				$user_profil_foto_lama 	= $this->input->post('user_profil_foto_lama',true);
				unlink("./foto_user/$user_profil_foto_lama");
			}
			else{
				$data = array(
					'user_username'  	 	=> $this->input->post('user_username',true),
					'user_pass'   			=> md5($this->input->post('user_pass',true)),
					'user_level'   			=> $this->input->post('user_level',true),
					'user_status'   		=> $this->input->post('user_status',true),
					'user_profil_nama'   	=> $this->input->post('user_profil_nama',true),
					'user_profil_lahir'   	=> $this->input->post('user_profil_lahir',true),
					'user_profil_notelp'  	=> $this->input->post('user_profil_notelp',true),
					'user_profil_email'   	=> $this->input->post('user_profil_email',true),
					'user_profil_pekerjaan' => $this->input->post('user_profil_pekerjaan',true),
					'user_profil_instansi'  => $this->input->post('user_profil_instansi',true),
					'user_profil_alamat'  	=> $this->input->post('user_profil_alamat',true),
				);
			}
			$this->Model_user->update($data, $id);
			redirect('user');
		} else {
			$data['title'] = "Edit user";

			$data['record'] = $this->Model_user->get_user($id)->row_array();
			$this->load->view('form_edit', $data);
		}
	}

	function hapus($id)
	{
		$this->Model_user->hapus($id);
		redirect ('user');
	}
}
