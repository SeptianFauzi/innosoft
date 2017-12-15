<?php
class Event extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_event');
	}

	function index()
	{
		$data['title'] = "Website RPL - Event";
		$data['body'] = "sidebar-disabled archive";
		$data['caption'] = "Event";

		$data['timeline'] = $this->model_event->get_timeline();

		$this->template->load('template_frontend','frontend/event/v_event',$data);
	}

	function lihat()
	{
		$id = $this->uri->segment(2);
		$data['record'] = $this->model_event->tampilkan_data($id)->row_array();
		$data['title'] = "Website RPL - Event";
		$data['body'] = "single";

		$this->template->load('template_frontend','frontend/event/v_event_lihat',$data);
	}
}
?>
