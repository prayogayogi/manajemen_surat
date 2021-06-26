<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }

  // view untuk login
  public function index()
  {
    $data['title'] = "Form Login";
    $this->load->view('includes/auth/login', $data);
    $this->load->view('pages/registerasi/login');
  }

  // action untuk login
  public function actionLogin()
  {
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', ['required' => 'Email Harus Diisi', 'valid_email' => 'Email Harus Valid']);
    $this->form_validation->set_rules('password', 'Password', 'required|trim', ['required' => 'Password Harus Diisi']);
    if ($this->form_validation->run() == FALSE) {
      $data['title'] = "Form Login";
      $this->load->view('templateRegister/login', $data);
      $this->load->view('registerasi/login');
    } else {
      $email = $this->input->post('email');
      $password = $this->input->post('password');
      $data = $this->db->get_where('userapp', ['email' => $email])->row_array();
      if ($data) {
        if (password_verify($password, $data['password'])) {
          $session = [
            'email' => $data['email'],
            'nama' => $data['nama']
          ];
          $this->session->set_userdata($session);
          $this->session->set_flashdata('status', '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Selamat </strong> Kamu berhasil login.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
          redirect('DashboardController');
        } else {
          $this->session->set_flashdata('status', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>No.!!</strong>Password Kamu Salah.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
          redirect('AuthController');
        }
      } else {
        $this->session->set_flashdata('status', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>No.!!</strong> Email Kamu Salah.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>');
        redirect('AuthController');
      }
    }
  }

  // Untuk Logout
  public function logout()
  {
    $this->session->sess_destroy('$session');
    $this->session->set_flashdata('status', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Anda Berhasil</strong> Keluar.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>');
    redirect('authController');
  }
}
