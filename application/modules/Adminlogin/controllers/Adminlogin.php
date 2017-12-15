<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlogin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_admin_login');
  }

public function index(){
  $this->view();
}
function view(){
  $this->load->view('form_login');
}
  public function login(){
  $data = array(
    'user_username' => $this->input->post('username'),
    'user_pass' => md5($this->input->post('password')),
    'user_level' => 'admin'
    );
  $valid_user = $this->M_admin_login->verifikasi($data);

  if ($valid_user == FALSE) {

    $this->session->set_flashdata('cek', 'benar');
    $this->session->set_flashdata('error', 'username atau Password Salah');
    redirect('Adminlogin');
  }else {
    $this->session->set_userdata($data);
    redirect('user');
  }
}
function logout(){
  $this->session->sess_destroy();
  redirect('Adminlogin');
}
}
