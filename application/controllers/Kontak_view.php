<?php 
class Kontak_view extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// $this->load->model('model_kontak_view');
	}

	function index()
	{
		$data['title'] = "Website RPL - Kontak";
		$data['body'] = "page";
		$data['caption'] = "";

		// $data['record'] = $this->model_aktifitas->tampilkan_data();

		// google API v3
		$this->load->library('googlemaps');
        $config['center'] = '-6.576006, 106.772447';
        $config['zoom'] = '19';
        $this->googlemaps->initialize($config);
        $marker = array();
        $marker['position'] = '-6.576006, 106.772447';
        $marker['infowindow_content'] = 'UIKA Bogor - Gedung Teknik';
        $marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
        $this->googlemaps->add_marker($marker);
        
        $data['map'] = $this->googlemaps->create_map();

		$this->template->load('template_frontend','frontend/v_kontak',$data);
	}
}
?>