<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
		
	}
	public function index()
	{
		if ($this->session->userdata('level') == 'ketua_pelaksana') {
			redirect('Admin/ketua_pelaksana');
		}else if ($this->session->userdata('level') == 'sekretariat') {
			redirect('Admin/sekretariat');
		}else if ($this->session->userdata('level') == 'perangkat_pertandingan'){
			redirect('Admin/perangkat_pertandingan');
		}else{
			$this->load->view('Admin/login');
		}
	}

	public function login(){
		if ($this->Admin_model->login() == "ketua_pelaksana") {
			echo json_encode(array('status' => 'ketua_pelaksana'));
		}else if ($this->Admin_model->login() == "sekretariat") {
			echo json_encode(array('status' => 'sekretariat'));
		}elseif ($this->Admin_model->login() == "perangkat_pertandingan") {
			echo json_encode(array('status' => 'perangkat_pertandingan'));
		}else {
			echo json_encode(array('status' => 'gagal', 'message' => 'Wrong username or password'));
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		echo json_encode(array('status' => 'berhasil'));
	}

	public function ketua_pelaksana(){
		if ($this->session->userdata('level') == "ketua_pelaksana") {
			$data['data_kategori_kelas_tanding'] = $this->Admin_model->get_all_kategori_kelas_tanding(); 
			$data['data_kategori_lomba'] = $this->Admin_model->get_all_kategori_lomba(); 
			$data['data_kategori_usia'] = $this->Admin_model->get_all_kategori_usia(); 
			$data['main_view'] ='Admin/ketua_pelaksana/general_setting';
			$this->load->view('Admin/ketua_pelaksana/template_ketua_pelaksana', $data);
		}else{
			$this->load->view('Admin/Access_denied');
		}
	}




	/*Page Controller*/
	public function general_setting_page(){
		if ($this->session->userdata('level') == "ketua_pelaksana") {
			$data['data_kategori_lomba'] = $this->Admin_model->get_all_kategori_lomba(); 
			$data['data_kategori_usia'] = $this->Admin_model->get_all_kategori_usia(); 
			$this->load->view('Admin/ketua_pelaksana/general_setting', $data);
		}else {
			 $this->load->view('Admin/Access_denied');;
		}
	}

















	public function insert_kategori_usia(){
		if ($this->session->userdata('level') == "ketua_pelaksana") {
			if ($this->Admin_model->insert_kategori_usia() == true) {
				echo json_encode(array('status' => 'success'));
			}else{
				echo json_encode(array('status' => 'failed'));
			}
		}else{
			$this->load->view('Admin/Access_denied');
		}
	}

	public function hapus_kategori_usia(){
		if ($this->session->userdata('level') == "ketua_pelaksana") {
			if ($this->Admin_model->hapus_kategori_usia() == true) {
				echo json_encode(array('status' => 'success'));
			}else{
				echo json_encode(array('status' => 'failed'));
			}
		}else{
			$this->load->view('Admin/Access_denied');
		}
	}

	public function get_specific_kategori_usia(){
		if ($this->session->userdata('level') == "ketua_pelaksana") {
			echo json_encode($this->Admin_model->get_specific_kategori_usia($this->uri->segment(3)));
		}else{
			$this->load->view('Admin/Access_denied');
		}
	}

	public function edit_kategori_usia(){
		if ($this->session->userdata('level') == "ketua_pelaksana") {
			if ($this->Admin_model->edit_kategori_usia() == true) {
				echo json_encode(array('status' => 'success'));
			}else{
				echo json_encode(array('status' => 'failed'));
			}
		}else{
			$this->load->view('Admin/Access_denied');
		}
	}

	public function cek_ketergantungan_kategori_usia(){
		if ($this->session->userdata('level') == "ketua_pelaksana") {
			if ($this->Admin_model->cek_ketergantungan_kategori_usia($this->input->post('id')) == true) {
				echo json_encode(array('status' => true));
			}else{
				echo json_encode(array('status' => false));
			}
		}else{
			$this->load->view('Admin/Access_denied');
		}
	}



	/*Kategori Lomba*/

	public function insert_kategori_lomba(){
		if ($this->session->userdata('level') == "ketua_pelaksana") {
			if ($this->Admin_model->insert_kategori_lomba() == true) {
				echo json_encode(array('status' => 'success'));
			}else{
				echo json_encode(array('status' => 'failed'));
			}
		}else{
			$this->load->view('Admin/Access_denied');
		}
	}

	public function hapus_kategori_lomba(){
		if ($this->session->userdata('level') == "ketua_pelaksana") {
			if ($this->Admin_model->hapus_kategori_lomba() == true) {
				echo json_encode(array('status' => 'success'));
			}else{
				echo json_encode(array('status' => 'failed'));
			}
		}else{
			$this->load->view('Admin/Access_denied');
		}
	}

	public function get_specific_kategori_lomba(){
		if ($this->session->userdata('level') == "ketua_pelaksana") {
			echo json_encode($this->Admin_model->get_specific_kategori_lomba($this->uri->segment(3)));
		}else{
			$this->load->view('Admin/Access_denied');
		}
	}

	public function edit_kategori_lomba(){
		if ($this->session->userdata('level') == "ketua_pelaksana") {
			if ($this->Admin_model->edit_kategori_lomba() == true) {
				echo "success";
			}else{
				echo "failed";
			}
		}else{
			$this->load->view('Admin/Access_denied');
		}
	}


	public function cek_ketergantungan_kategori_lomba(){
		if ($this->session->userdata('level') == "ketua_pelaksana") {
			if ($this->Admin_model->cek_ketergantungan_kategori_usia($this->input->post('id')) == true) {
				echo json_encode(array('status' => true));
			}else{
				echo json_encode(array('status' => false));
			}
		}else{
			$this->load->view('Admin/Access_denied');
		}
	}






	/*Kategori Kelas Tanding*/
	public function insert_kategori_kelas_tanding(){
		if ($this->session->userdata('level') == "ketua_pelaksana") {
			if ($this->Admin_model->insert_kategori_kelas_tanding() == true) {
				echo json_encode(array('status' => 'success'));
			}else{
				echo json_encode(array('status' => 'failed'));
			}
		}else{
			$this->load->view('Admin/Access_denied');
		}
	}

	public function hapus_kategori_kelas_tanding(){
		if ($this->session->userdata('level') == "ketua_pelaksana") {
			if ($this->Admin_model->hapus_kategori_kelas_tanding() == true) {
				echo json_encode(array('status' => 'success'));
			}else{
				echo json_encode(array('status' => 'failed'));
			}
		}else{
			$this->load->view('Admin/Access_denied');
		}
	}

	public function get_specific_kategori_kelas_tanding(){
		if ($this->session->userdata('level') == "ketua_pelaksana") {
			echo json_encode($this->Admin_model->get_specific_kategori_kelas_tanding($this->uri->segment(3)));
		}else{
			$this->load->view('Admin/Access_denied');
		}
	}

	public function edit_kategori_kelas_tanding(){
		if ($this->session->userdata('level') == "ketua_pelaksana") {
			if ($this->Admin_model->edit_kategori_kelas_tanding() == true) {
				echo "success";
			}else{
				echo "failed";
			}
		}else{
			$this->load->view('Admin/Access_denied');
		}
	}

	


}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */