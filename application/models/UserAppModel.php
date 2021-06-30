<?php
defined('BASEPATH') or exit('No direct script access allowed');
class UserAppModel extends CI_Model
{
  public function tambahDataAdministrator()
  {
    $file = $_FILES['foto'];
    if ($file) {
      $config['allowed_types']  = 'gif|jpg|png';
      $config['max_size']       = '2048';
      $config['upload_path']    = './assets/assetGambar/administrator/';
      $this->load->library('upload', $config);

      if ($this->upload->do_upload('foto')) {
        $files = $this->upload->data('file_name', TRUE);
      } else {
        echo "error";
      }
    }

    $data = [
      'nama' => $this->input->post('nama', true),
      'email' => $this->input->post('email', true),
      'alamat' => $this->input->post('alamat', true),
      'foto' => $files,
      'roles' => 1,
      'password' => password_hash($this->input->post('nama', true), PASSWORD_DEFAULT)
    ];
    $this->db->insert('userapp', $data);
  }
}
