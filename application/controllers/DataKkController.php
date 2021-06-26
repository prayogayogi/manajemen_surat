<?php

class DataKkController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model(['pendudukModel', 'authModel']);
  }

  // DATA KARTU KELUARGA
  // Untuk View data Kartu keluarga
  public function index()
  {
    $data['title'] = 'Data Kartu Keluarga';
    $data['userLogin'] = $this->authModel->getUserLogin()->row_array();
    $this->load->view('includes/header', $data);
    $this->load->view('includes/sidebar', $data);
    $this->load->view('pages/dashboard/viewDataKartuKeluarga');
    $this->load->view('includes/footer');
  }
}
