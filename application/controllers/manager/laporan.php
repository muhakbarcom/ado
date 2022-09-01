<?php

class laporan extends CI_Controller
{
	public function index()
	{
		$data['sudah'] = $this->db->query("SELECT * FROM ado where status='Sudah Prospek'")->result();
		$data['belum'] = $this->db->query("SELECT * FROM ado where status='Belum Prospek'")->result();

		$this->load->view('template/header');
		$this->load->view('manager/sidebar');
		$this->load->view('manager/v_laporan', $data);
		$this->load->view('template/footer');
	}
}
