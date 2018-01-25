<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {
	public function __construct() {
        parent::__construct();
		$this->load->model('M_pegawai');
		$this->load->model('M_posisi');
        $this->load->model('M_kota');
        
		$this->userdata_karyawan = $this->session->userdata('userdata_karyawan');
		
		$this->session->set_flashdata('segment', explode('/', $this->uri->uri_string()));

		if ($this->session->userdata('status_karyawan') == '') {
			redirect('Karyawan');
        }

	}

	public function index() {
		$this->load->view('karyawan/absensi');
	}
}
