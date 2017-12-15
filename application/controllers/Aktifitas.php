<?php 
class Aktifitas extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_aktifitas');
	}

	function index()
	{
		$data['title'] = "Website RPL - Aktifitas";
		$data['body'] = "sidebar-disabled archive";
		$data['caption'] = "Aktifitas";

		$this->load->model('model_front_home');
		$data['timeline'] = $this->model_aktifitas->get_timeline();

		$this->template->load('template_frontend','frontend/aktifitas/v_aktifitas',$data);
	}

	function rpl()
	{
		$data['title'] = "Website RPL - Aktifitas RPL";
		$data['body'] = "sidebar-disabled archive";
		$data['caption'] = "Aktifitas - RPL";

		$this->load->model('model_front_home');
		$data['timeline'] = $this->model_aktifitas->get_timeline_rpl();

		$this->template->load('template_frontend','frontend/aktifitas/v_aktifitas',$data);
	}

	function ti()
	{
		$data['title'] = "Website RPL - Aktifitas";
		$data['body'] = "sidebar-disabled archive";
		$data['caption'] = "Aktifitas - TI";

		$this->load->model('model_front_home');
		$data['timeline'] = $this->model_aktifitas->get_timeline_ti();

		$this->template->load('template_frontend','frontend/aktifitas/v_aktifitas',$data);
	}



	function uika()
	{
		$data['title'] = "Website RPL - Aktifitas";
		$data['body'] = "sidebar-disabled archive";
		$data['caption'] = "Aktifitas - UIKA";

		$this->load->model('model_front_home');
		$data['timeline'] = $this->model_aktifitas->get_timeline_uika();

		$this->template->load('template_frontend','frontend/aktifitas/v_aktifitas',$data);
	}

	function event()
	{
		$data['title'] = "Website RPL - Aktifitas";
		$data['body'] = "sidebar-disabled archive";
		$data['caption'] = "Aktifitas - Event";

		$this->load->model('model_front_home');
		$data['timeline'] = $this->model_aktifitas->get_timeline_event();

		$this->template->load('template_frontend','frontend/aktifitas/v_aktifitas',$data);
	}
}
?>