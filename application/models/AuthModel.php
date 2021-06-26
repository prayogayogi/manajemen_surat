<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AuthModel extends CI_Model
{
  // Untuk mengambil data User yang Login
  function getUserLogin()
  {
    return $this->db->get_where('userapp', ['email' => $this->session->userdata('email')]);
  }
}
