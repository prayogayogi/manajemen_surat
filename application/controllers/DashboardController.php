<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model(['pendudukModel', 'authModel']);
  }
  // Untuk View Dashboard
  public function index()
  {
    if (!$this->session->userdata('email')) {
      redirect('authController');
    }
    $data['title'] = 'Dashboard';
    $data['userLogin'] = $this->authModel->getUserLogin()->row_array();
    $data['dataPenduduk'] = $this->pendudukModel->getPenduduk()->num_rows();
    $this->load->view('includes/header', $data);
    $this->load->view('includes/sidebar', $data);
    $this->load->view('pages/dashboard/viewDashboard', $data);
    $this->load->view('includes/footer');
  }
}
