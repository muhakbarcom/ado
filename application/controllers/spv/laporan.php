<?php

class laporan extends CI_Controller
{
    public function index()
    {
        //     $this->form_validation->set_rules('dari','Dari Tanggal','required');
        //     $this->form_validation->set_rules('sampai','Sampai Tanggal','required');

        //     if ($this->form_validation->run() == FALSE){
        //         $dari = $this->input->post('dari');
        //         $sampai = $this->input->post('sampai');
        //     $this->load->view('template/header');
        // 	$this->load->view('spv/sidebar');
        // 	$this->load->view('spv/v_laporan');
        // 	$this->load->view('template/footer');

        //     }else{
        //     $dari = $this->input->post('dari');
        //     $sampai = $this->input->post('sampai');

        //     $query = $this->db->query("SELECT * FROM ado WHERE date(tanggal)>= '$dari' AND date(tanggal)<= '$sampai'")->result();
        //     $data['data'] = $this->Ado_model->grafik();		
        // 	$this->load->view('template/header');
        // 	$this->load->view('spv/sidebar');
        // 	$this->load->view('spv/v_grafik',$data);
        // 	$this->load->view('template/footer');

        //     }
        // }

        $data['sudah'] = $this->db->query("SELECT * FROM ado where status='Sudah Prospek'")->result();
        $data['belum'] = $this->db->query("SELECT * FROM ado where status='Belum Prospek'")->result();

        $this->load->view('template/header');
        $this->load->view('spv/sidebar');
        $this->load->view('spv/v_laporan', $data);
        $this->load->view('template/footer');
    }
}
