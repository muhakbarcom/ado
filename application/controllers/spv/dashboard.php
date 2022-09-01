<?php 
class dashboard extends CI_Controller{
	public function index ()
	{
		$data['ado'] = $this->Ado_model->hitungJumlahAdo();
		$data['pasar'] = $this->Ado_model->hitungJumlahPasar();
		$data['bank'] = $this->Ado_model->hitungJumlahBank();
		$data['kcmt'] = $this->Ado_model->hitungJumlahKecamatan();
		$data['skl'] = $this->Ado_model->hitungJumlahSklh();
		$data['perusahaan'] = $this->Ado_model->hitungJumlahPerusahaan();
		$data['asuransi'] = $this->Ado_model->hitungJumlahAsuransi();
		$data['non'] = $this->Ado_model->hitungJumlahNonBank();
		$this->load->view('template/header');
		$this->load->view('spv/sidebar');
		$this->load->view('spv/dashboard',$data);
		$this->load->view('template/footer');
	}
} 
?>
