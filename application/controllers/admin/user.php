<?php 

class user extends CI_Controller{
	public function index()
	{
		$data['user'] = $this->Ado_model->get_data('user')->result();		
		$this->load->view('template/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_user',$data);
		$this->load->view('template/footer');
	}
	public function tambah_data()
	{
		$this->load->view('template/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/tambah_user');
		$this->load->view('template/footer');
	}
	public function tambah_user_aksi()
	{
		$this->form_validation->set_rules('nama_user','Nama Lengkap','required');
		$this->form_validation->set_rules('alamat_user','Alamat','required');
		$this->form_validation->set_rules('telpon_user','Telpon','required');
		$this->form_validation->set_rules('jabatan','Jabatan','required');
		$this->form_validation->set_rules('username','Password','required');
		$this->form_validation->set_rules('password','Password','required');
		

		if($this->form_validation->run() == FALSE){
			$this->tambah_data();
		}else{
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG|tiff';
			$config['max_size'] = 3000;
			$this->load->library('upload');
			$this->upload->initialize($config);	
			if($this->upload->do_upload('foto_user')){
			$nama_user 					= $this->input->post('nama_user');
			$alamat_user 				= $this->input->post('alamat_user');
			$telpon_user 				= $this->input->post('telpon_user');
			$jabatan 					= $this->input->post('jabatan');
			$username 					= $this->input->post('username');
			$password 					= md5($this->input->post('password'));
			$hasil = $this->upload->data();
			

			$data = array(
				'nama_user'		=>$nama_user,
				'alamat_user'	=>$alamat_user,
				'telpon_user'	=>$telpon_user,
				'jabatan'		=>$jabatan,
				'username'		=>$username,
				'password'		=>$password,
				'foto_user' 	=> $hasil['file_name']
			);
			$this->Ado_model->insert_data($data,'user');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Berhasil Ditambahkan!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/user');
			}

		}
	}
	public function update_user($id)
	{
		$where = array('id_user' => $id);
		$data['user'] = $this->db->query("SELECT * FROM user WHERE id_user='$id'")->result();
		$this->load->view('template/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/update_user',$data);
		$this->load->view('template/footer');
	}

	public function update_user_aksi()
	{
		$this->form_validation->set_rules('nama_user','Nama Lengkap','required');
		$this->form_validation->set_rules('alamat_user','Alamat','required');
		$this->form_validation->set_rules('telpon_user','Telpon','required');
		$this->form_validation->set_rules('jabatan','Jabatan','required');
		$this->form_validation->set_rules('username','Password','required');
		$this->form_validation->set_rules('password','Password','required');
		

		if($this->form_validation->run() == FALSE)
		{
			$this->update_user();
		}else{
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG|tiff';
			$config['max_size'] = 3000;
			$this->load->library('upload');
			$this->upload->initialize($config);	
			if($this->upload->do_upload('foto_user')){
			$id 						= $this->input->post('id_user');
			$nama_user 					= $this->input->post('nama_user');
			$alamat_user 				= $this->input->post('alamat_user');
			$telpon_user 				= $this->input->post('telpon_user');
			$jabatan 					= $this->input->post('jabatan');
			$username 					= $this->input->post('username');
			$password 					= md5($this->input->post('password'));
			$hasil = $this->upload->data();
			
			$data = array(
				'nama_user'		=>$nama_user,
				'alamat_user'	=>$alamat_user,
				'telpon_user'	=>$telpon_user,
				'jabatan'		=>$jabatan,
				'username'		=>$username,
				'password'		=>$password,
				'foto_user' 	=> $hasil['file_name']
			);
			$where = array(
				'id_user' => $id
			);
			$this->Ado_model->update_data('user',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Data Berhasil Diupdate!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/user');

		}
	}
}

	public function delete_user($id)
	{
		$where = array('id_user' => $id);
		$this->Ado_model->delete_data($where,'user');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Data Berhasil Dihapus!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('admin/user');
	}

}


?>