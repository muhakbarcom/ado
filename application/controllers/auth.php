<?php 

	class auth extends CI_Controller{

		public function login()
		{
			$this->_rules();

			if($this->form_validation->run() == FALSE){
			$this->load->view('template/header');
			$this->load->view('login');
			$this->load->view('template/footer');
			}else{
				$username = $this->input->post('username');
				$password = md5($this->input->post('password'));

				$cek = $this->Ado_model->cek_login($username, $password);

				if($cek == FALSE) 
				{
					$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  		Username atau Password salah!
				  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				   		<span aria-hidden="true">&times;</span>
				  		</button>
						</div>');
				redirect('auth/login');
				}else {
					$this->session->set_userdata('username',$cek->username);
					$this->session->set_userdata('jabatan',$cek->jabatan);
					$this->session->set_userdata('nama_user',$cek->nama_user);
					$this->session->set_userdata('id_user',$cek->id_user);
					switch ($cek->jabatan){
						case 'Admin' : redirect('admin/dashboard');
							break;
						case 'SPV' : redirect('spv/dashboard');
							break;
						case 'Executive Manager' : redirect('manager/dashboard');
							break;
						default : break;
					}


				}
			}
		}
		public function _rules()
		{
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');
			//$this->form_validation->set_rules('nama_customer','Nama','required');
		}
		public function logout()
		{
			$this->session->sess_destroy();
			redirect('auth/login');
		}
		public function ganti_password()
		{
			$this->load->view('template/header');
			$this->load->view('ganti_password');
			$this->load->view('template/footer');
		}

		
	}
 ?>