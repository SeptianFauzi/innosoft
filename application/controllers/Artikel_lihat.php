<?php 
class Artikel_lihat extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_artikel_lihat');
	}

	function lihat()
	{
		$id = $this->uri->segment(3);
		$data['record'] = $this->Model_artikel_lihat->tampilkan_data($id)->row_array();
		$data['title'] = "Website RPL - Innosoft";
		$data['body'] = "single";

		$this->template->load('template_frontend','frontend/v_artikel_lihat',$data);
	}
}
?>