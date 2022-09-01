<?php 

class daop extends CI_Controller{
	public function index()
	{
		$data['daop'] = $this->Ado_model->get_data('ado')->result();		
		$this->load->view('template/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_ado',$data);
		$this->load->view('template/footer');
	}
	public function tambah_data()
	{
		$this->load->view('template/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/tambah_ado');
		$this->load->view('template/footer');
	}
	public function tambah_ado_aksi()
	{
		$this->form_validation->set_rules('nama_ado','Nama Daerah Operasi','required');
		$this->form_validation->set_rules('alamat_ado','Alamat','required');
		$this->form_validation->set_rules('telepon_ado','Telepon','required');
		$this->form_validation->set_rules('keterangan_ado','Keterangan','required');
		$this->form_validation->set_rules('jenis_ado','Jenis Ado','required');
		
		

		if($this->form_validation->run() == FALSE){
			$this->tambah_data();
		}else{
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG|tiff';
			$config['max_size'] = 3000;
			$this->load->library('upload');
			$this->upload->initialize($config);	
			if($this->upload->do_upload('foto_ado')){
			$nama_ado 					= $this->input->post('nama_ado');
			$alamat_ado 				= $this->input->post('alamat_ado');
			$telepon_ado 				= $this->input->post('telepon_ado');
			$keterangan_ado 			= $this->input->post('keterangan_ado');
			$jenis_ado 					= $this->input->post('jenis_ado');
			$hasil = $this->upload->data();
			

			$data = array(
				'nama_ado'		=>$nama_ado,
				'alamat_ado'	=>$alamat_ado,
				'telepon_ado'	=>$telepon_ado,
				'keterangan_ado'=>$keterangan_ado,
				'jenis_ado'		=>$jenis_ado,
				'foto_ado' 		=> $hasil['file_name']
			);
			$this->Ado_model->insert_data($data,'ado');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Berhasil Ditambahkan!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/daop');
			}

		}
	}
	public function update_data($id)
	{
		$where = array('id_ado' => $id);
		$data['daop'] = $this->db->query("SELECT * FROM ado WHERE id_ado='$id'")->result();
		$this->load->view('template/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/update_ado',$data);
		$this->load->view('template/footer');

	}

	public function update_ado_aksi()
	{
		$this->form_validation->set_rules('nama_ado','Nama Daerah Operasi','required');
		$this->form_validation->set_rules('alamat_ado','Alamat','required');
		$this->form_validation->set_rules('telepon_ado','Teletpon','required');
		$this->form_validation->set_rules('keterangan_ado','Keterangan','required');
		$this->form_validation->set_rules('jenis_ado','Jenis Ado','required');
		

		if($this->form_validation->run() == FALSE)
		{
			$this->update_data();
		}else{
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG|tiff';
			$config['max_size'] = 3000;
			$this->load->library('upload');
			$this->upload->initialize($config);	
			if($this->upload->do_upload('foto_ado')){
			$id 						= $this->input->post('id_ado');
			$nama_ado 					= $this->input->post('nama_ado');
			$alamat_ado 				= $this->input->post('alamat_ado');
			$telepon_ado 				= $this->input->post('telepon_ado');
			$keterangan_ado 			= $this->input->post('keterangan_ado');
			$jenis_ado 					= $this->input->post('jenis_ado');
			$hasil = $this->upload->data();
			

			$data = array(
				'nama_ado'		=>$nama_ado,
				'alamat_ado'	=>$alamat_ado,
				'telepon_ado'	=>$telepon_ado,
				'keterangan_ado'=>$keterangan_ado,
				'jenis_ado'		=>$jenis_ado,
				'foto_ado' 		=>$hasil['file_name']
			);
			$where = array(
				'id_ado' => $id,
			);

			$this->Ado_model->update_data('ado',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Berhasil Diupdate!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/daop');

		}
	}
}

	public function delete_ado($id)
	{
		$where = array('id_ado' => $id);
		$this->Ado_model->delete_data($where,'ado');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data Berhasil Dihapus!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/daop');
	}
	public function print_data()
	{
		$data['ado'] = $this->Ado_model->tampil_ado('ado')->result();
		$this->load->view('admin/print_ado',$data);
	}
	public function detail($id)
    {
        $data['detail'] = $this->Ado_model->ambil_detail_lap($id);
        $this->load->view('template/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/detail_ado',$data);
        $this->load->view('template/footer');
    }
    public function print_id($id)
    {
        $data['detail'] = $this->Ado_model->ambil_detail_lap($id);

        $this->load->view('admin/cetak_ado',$data);


    }

}


?>