<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PendudukModel extends CI_Model
{
  // Untuk mengambil data penduduk
  function getPenduduk()
  {
    return $this->db->get('datapenduduk');
  }

  // Store data penduduk
  function storePenduduk()
  {
    $data = [
      'nama' => $this->input->post('nama'),
      'alamat' => $this->input->post('alamat'),
      'nama_desa' => $this->input->post('nama_desa'),
      'jenis_kelamin' => $this->input->post('jenis_kelamin'),
      'nik' => $this->input->post('nik'),
      'no_kk' => $this->input->post('no_kk'),
      'pekerjaan' => $this->input->post('pekerjaan'),
      'tgl_masuk' => date('d-m-Y')
    ];
    $this->db->insert('datapenduduk', $data);
  }


  // Edit Data Pendududuk
  function update($id)
  {
    $data = [
      'nama' => $this->input->post('alamat'),
      'alamat' => $this->input->post('nama_desa'),
      'nik' => $this->input->post('nik'),
      'nik' => $this->input->post('no_kk'),
      'nik' => $this->input->post('pekerjaan')
    ];
    var_dump($data);
    die;
    $this->db->where('id', $id);
    $this->db->update('datapenduduk', $data);
  }

  // get data detail
  function getShow($id)
  {
    $data = ['id' => $id];
    return $this->db->get_where('datapenduduk', $data);
  }


  // Join
  function join()
  {
    $this->db->select('*');
    $this->db->from('status');
    $this->db->join('datapenduduk', 'datapenduduk.pekerjaan = status.pekerjaan');
    return $this->db->get();
    // $this->join('status', 'status.pekerjaan=datapenduduk.pekerjaan');
    // return $this->db->get('datapenduduk');
  }
}
