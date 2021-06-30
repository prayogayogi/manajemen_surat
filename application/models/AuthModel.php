<?php
defined('BASEPATH') or exit('No direct script access allowed');
class AuthModel extends CI_Model
{
  // Untuk mengambil data User yang Login
  function getUserLogin()
  {
    return $this->db->get_where('userapp', ['email' => $this->session->userdata('email')]);
  }

  // untuk mengambil data adminsitrator dengan Roles [1]
  function getAdminstrator()
  {
    return $this->db->get_where('userapp', ['roles' => 1]);
  }

  // untuk mengambil data admin dengan Roles [2]
  function getAdmin()
  {
    return $this->db->get_where('userapp', ['roles' => 2]);
  }
}
