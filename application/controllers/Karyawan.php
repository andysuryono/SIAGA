<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_karyawan');
	}
	
	public function index() {
		$session = $this->session->userdata('status_karyawan');

		if ($session == '') {
			$this->load->view('karyawan/login');
		} else {
			redirect('Absensi');
		}
	}

	public function login() {
		$this->form_validation->set_rules('id_karyawan', 'ID Karyawan', 'required|min_length[1]');
		// $this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == TRUE) {
			$id_karyawan = trim($_POST['id_karyawan']);
			// $password = trim($_POST['password']);

			$data = $this->M_karyawan->login($id_karyawan);

			if ($data == false) {
				$this->session->set_flashdata('error_msg', 'ID Karyawan Anda Salah.');
				redirect('Karyawan');
			} else {
				$session = [
					'userdata_karyawan' => $data,
					'status_karyawan' => "Logged in"
				];
				$this->session->set_userdata($session);
				redirect('Absensi');
			}
		} else {
			$this->session->set_flashdata('error_msg', validation_errors());
			redirect('Karyawan');
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('Karyawan');
	}
}
