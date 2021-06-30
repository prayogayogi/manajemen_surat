<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdministratorController extends CI_Controller
{
  // Model2 Untuk data
  public function __construct()
  {
    parent::__construct();
    $this->load->model(['pendudukModel', 'authModel', 'UserAppModel']);
  }

  // get data Administrator
  public function index()
  {
    $data['title'] = "Adminstrator";
    $data['no'] = 1;
    $data['userLogin'] = $this->authModel->getUserLogin()->row_array();
    $data['getAdminstrator'] = $this->authModel->getAdminstrator()->result_array();
    $this->load->view('includes/header', $data);
    $this->load->view('includes/sidebar', $data);
    $this->load->view('pages/auth/viewAdministrator', $data);
    $this->load->view('includes/footer');
  }

  // Tambah Data Administrator
  public function tambahDataAdministrator()
  {
    $this->UserAppModel->tambahDataAdministrator();
    $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Administrator</strong> Berhasil Di Tambah.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
    redirect('AdministratorController');
  }

  // get data Admini
  public function admin()
  {
    $data['title'] = "Admin";
    $data['no'] = 1;
    $data['userLogin'] = $this->authModel->getUserLogin()->row_array();
    $data['getAdminstrator'] = $this->authModel->getAdmin()->result_array();
    $this->load->view('includes/header', $data);
    $this->load->view('includes/sidebar', $data);
    $this->load->view('pages/auth/viewAdmin', $data);
    $this->load->view('includes/footer');
  }
}
