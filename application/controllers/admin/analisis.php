<?php

class analisis extends CI_Controller
{
	public function index()
	{
		$this->load->model('ado_model');

		$jenis_ado = $this->ado_model->get_data('jenis')->result();
		$data = array(
			'jenis_ado' => $jenis_ado
		);
		$this->load->view('template/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_analisis', $data);
		$this->load->view('template/footer');
	}
	public function analisis_aksi()
	{
		$this->load->model('ado_model');

		$jenis_ado_select = $this->ado_model->get_data('jenis')->result();
		$this->form_validation->set_rules('jenis_ado', 'Jenis Daerah Operasi', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			$jenis_ado = $this->input->post('jenis_ado', TRUE);
		}
		if ($this->Ado_model->get_by_id($jenis_ado) == NULL) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  				<strong>Data Jenis Daerah Operasi Tidak Ada!</strong> 
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
  				</button>
				</div>');
			redirect('admin/analisis');
		}
		$data = array(
			'jenis_ado' => $jenis_ado,
			'nama_ado' => $this->Ado_model->get_by_id($jenis_ado)->nama_ado
		);

		$dataJenis = array(
			'jenis_data' 	=> $this->baca_nilai($jenis_ado),
			'jenis_ado'		=> $jenis_ado,
			'jenis_ado_select' => $jenis_ado_select,
			'nama_ado' 		=> $this->Ado_model->get_by_id($jenis_ado)->nama_ado,
			'alamat_ado' 	=> $this->Ado_model->get_by_id($jenis_ado)->alamat_ado,
			'estimasi' 		=> $this->Ado_model->get_by_id($jenis_ado)->estimasi,
		);
		$this->load->view('template/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/ListJenis', $dataJenis);
		$this->load->view('template/footer');
	}
	public function baca_nilai($jenis_ado)
	{
		$this->db->select('jenis_ado, nama_ado, alamat_ado, estimasi');
		$this->db->from('ado');
		$this->db->where('jenis_ado', $jenis_ado);
		$this->db->order_by('estimasi', 'desc');
		$this->db->limit(5);
		$jenis_ado = $this->db->get()->result();
		return $jenis_ado;
	}
}
