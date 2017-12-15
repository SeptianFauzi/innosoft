<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin_login extends CI_Model{

  var $tabel = 'lab_user';
public function __construct()
{
  parent::__construct();
    $this->load->database();
}

public function verifikasi($data){
  $array = array('user_username' => $data['user_username'], 'user_pass' => $data['user_pass'],'user_level' => $data['user_level'] );
$query = $this->db->where($array)->limit(1)->get($this->tabel);
if ($query->num_rows() > 0) {
return $query->row();
} else{
return false;
}
}
}
