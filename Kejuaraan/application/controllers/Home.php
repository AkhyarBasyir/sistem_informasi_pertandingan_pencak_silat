<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
		
	}
	public function index()
	{
		$data['daftar_kontingen'] = $this->Home_model->get_all_kontingen();
		$this->load->view('Pendaftaran/index', $data);
	}
	public function daftarPesilat(){

		$config['upload_path'] = './uploads/peserta/foto';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '400';
		$config['file_name'] = 'foto_'.$this->input->post('nama').'_'.$this->input->post('tanggal_lahir');
		
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('foto')){
				echo json_encode(array('message' => $this->upload->display_errors()."(foto)"));
		}else{
			$nama_foto = $this->upload->data('file_name');
			$config['upload_path'] = './uploads/peserta/arsip';
			$config['allowed_types'] = 'pdf|doc|docx';
			$config['max_size']  = '1000';
			$config['file_name'] = 'arsip_'.$this->input->post('nama').'_'.$this->input->post('tanggal_lahir');
			$this->upload->initialize($config);
			if ( ! $this->upload->do_upload('arsip')){
				echo json_encode(array('message' => $this->upload->display_errors()."(arsip)"));
			}
			else{
				$nama_arsip = $this->upload->data('file_name');
				if ($this->Home_model->insert_daftar_pesilat($nama_foto, $nama_arsip) == TRUE) {
					echo json_encode(array('message' => "success"));
				}else{
					echo json_encode(array("message" => "failed"));
				}
				
			}
		}
	}
	public function daftarKontingen(){
		if ($this->Home_model->insert_daftar_kontingen() == TRUE) {
			echo json_encode(array('message' => "success"));
		}else{
			echo json_encode(array("message" => "failed"));
		}
	}

	public function reloaddaftarKontingen(){
		$data = $this->Home_model->get_all_kontingen();
		foreach ($data as $kontingen) {
			echo '<option value="'.$kontingen->id_kontingen.'">'.$kontingen->nama_kontingen.'</option>';
			# code...
		}
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */