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
		$this->load->view('manager/sidebar');
		$this->load->view('manager/v_analisis', $data);
		$this->load->view('template/footer');
	}
	public function analisis_aksi($jenis_ado_param = NULL)
	{


		$this->load->model('ado_model');

		$jenis_ado_select = $this->ado_model->get_data('jenis')->result();
		$this->form_validation->set_rules('jenis_ado', 'Jenis Daerah Operasi', 'required');
		if ($jenis_ado_param != NULL) {
			$jenis_ado = $jenis_ado_param;
			$jenis_ado = $this->db->query("SELECT jenis_ado from jenis where id_jenis='$jenis_ado'")->row()->jenis_ado;
		} elseif ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			$jenis_ado = $this->input->post('jenis_ado', TRUE);
		}
		// print_r($jenis_ado);
		// die;

		// print_r($jenis_ado);
		// die;
		if ($this->Ado_model->get_by_id($jenis_ado) == NULL) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  				<strong>Data Jenis Daerah Operasi Tidak Ada!</strong> 
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    			<span aria-hidden="true">&times;</span>
  				</button>
				</div>');
			redirect('manager/analisis');
		}

		$dataJenis = array(
			'jenis_data' 	=> $this->baca_nilai($jenis_ado),
			'jenis_ado'		=> $jenis_ado,
			'jenis_ado_select' => $jenis_ado_select,
			'nama_ado' 		=> $this->Ado_model->get_by_id($jenis_ado)->nama_ado,
			'alamat_ado' 	=> $this->Ado_model->get_by_id($jenis_ado)->alamat_ado,
			'estimasi' 		=> $this->Ado_model->get_by_id($jenis_ado)->estimasi,
		);
		$dataJenis['data'] = $this->db->query("SELECT * FROM ado WHERE jenis_ado='$jenis_ado' order by estimasi desc")->result();
		$this->load->view('template/header');
		$this->load->view('manager/sidebar');
		$this->load->view('manager/ListJenis', $dataJenis);
		$this->load->view('template/footer');
	}
	public function baca_nilai($jenis_ado)
	{
		$this->db->select('jenis_ado, nama_ado, alamat_ado, estimasi');
		$this->db->from('ado');
		$this->db->where('jenis_ado', $jenis_ado);
		$this->db->where('status', "Sudah Prospek");
		$this->db->order_by('estimasi', 'desc');
		$this->db->limit(5);
		$jenis_ado = $this->db->get()->result();
		return $jenis_ado;
	}

	public function edit($id)
	{
		// $jenis_ado_param = $this->input->get('jenis');
		$data['daop'] = $this->db->query("SELECT * FROM ado WHERE id_ado='$id'")->result();
		// $data['jenis_ado'] = $this->db->query("SELECT id_jenis from jenis where nama_jenis='$jenis_ado'")->row()->id_jenis;
		// $data['id'] = $id;
		$this->load->view('template/header');
		$this->load->view('manager/sidebar');
		$this->load->view('manager/edit', $data);
		$this->load->view('template/footer');
	}

	public function edit_aksi()
	{
		$id_ado = $this->input->post('id_ado');
		$jenis_ado = $this->input->post('jenis_ado');
		$jenis_ado = $this->db->query("SELECT id_jenis from jenis where jenis_ado='$jenis_ado'")->row()->id_jenis;

		$estimasi = $this->input->post('estimasi');

		$data = array(
			'estimasi' => $estimasi
		);

		$where = array(
			'id_ado' => $id_ado
		);

		$this->Ado_model->update_data('ado', $data, $where);
		redirect(site_url('manager/analisis/analisis_aksi/' . $jenis_ado));
	}

	public function validasi($id_ado, $jenis_ado)
	{
		// $id_ado = $this->input->post('id_ado');
		// $jenis_ado = $this->input->post('jenis_ado');
		$jenis_ado = $this->db->query("SELECT id_jenis from jenis where jenis_ado='$jenis_ado'")->row()->id_jenis;


		$data = array(
			'status' => 'Sudah Prospek'
		);

		$where = array(
			'id_ado' => $id_ado
		);

		$this->Ado_model->update_data('ado', $data, $where);
		redirect(site_url('manager/analisis/analisis_aksi/' . $jenis_ado));
	}

	public function un_validasi($id_ado, $jenis_ado)
	{
		// $id_ado = $this->input->post('id_ado');
		// $jenis_ado = $this->input->post('jenis_ado');
		$jenis_ado = $this->db->query("SELECT id_jenis from jenis where jenis_ado='$jenis_ado'")->row()->id_jenis;

		$data = array(
			'status' => 'Belum Prospek'
		);

		$where = array(
			'id_ado' => $id_ado
		);

		$this->Ado_model->update_data('ado', $data, $where);
		redirect(site_url('manager/analisis/analisis_aksi/' . $jenis_ado));
	}
}
