<?php
/**
*
*/
class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['title'] = "Back-End Website RPL";
		$this->template->load('template_backend','v_home',$data);
	}
}
