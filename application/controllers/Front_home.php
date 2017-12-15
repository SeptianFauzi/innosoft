<?php 
class Front_home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('model_front_home');
	}

	function index()
	{
		$data['title'] = "Website RPL - Innosoft";
		$data['body'] = "";
		$data['slider'] = $this->model_front_home->get_slider();
		$data['sematrpl'] = $this->model_front_home->semat_rpl()->row_array();
		$data['sematti'] = $this->model_front_home->semat_ti()->row_array();
		$data['sematuika'] = $this->model_front_home->semat_uika()->row_array();
		$data['sematevent'] = $this->model_front_home->semat_event()->row_array();
		$data['timeline'] = $this->model_front_home->get_timeline();
		$this->template->load('template_frontend','frontend/v_home',$data);
	}

	function subscribe(){
		if (isset($_POST['submit']))
		{
			$data = array('subscribe_email' => $this->input->post('subEmail'));
			$this->db->insert('lab_subscribe',$data);
			redirect('Front_home');
		}
	}
}
?>