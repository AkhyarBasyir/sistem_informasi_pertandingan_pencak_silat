<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function login(){
		$query = $this->db->where('username', $this->input->post('username'))
				 ->where('password', md5($this->input->post('password')))
				 ->get('admin');
		
		if ($this->db->affected_rows() > 0) {
			$array = array(
				'level' => $query->row('level'),
				'username' => $query->row('username')
			);
			
			$this->session->set_userdata( $array );
			return $query->row('level');
		}else{
			return false;
		}

	}

	public function insert_kategori_usia(){
		$data = array(
					"nama_kategori" => $this->input->post('nama_kategori'),
					"jenis_kelamin" => $this->input->post('jenis_kelamin'),
					"min_umur" => $this->input->post('min_umur'),
					"max_umur" => $this->input->post('max_umur'),
					"acuan_tanggal" =>$this->input->post('acuan_tanggal')
		);

		$this->db->insert('kategori_usia', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}

	}

	public function hapus_kategori_usia(){
		$this->db->where('id_kategori_usia', $this->input->post('id_kategori'))
				 ->delete('kategori_usia');
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}


	public function edit_kategori_usia(){
		$data = array(
					"nama_kategori" => $this->input->post('nama_kategori'),
					"jenis_kelamin" => $this->input->post('jenis_kelamin'),
					"min_umur" => $this->input->post('min_umur'),
					"max_umur" => $this->input->post('max_umur'),
					"acuan_tanggal" =>$this->input->post('acuan_tanggal')
		);

		$this->db->where('id_kategori_usia', $this->uri->segment(3))
				->update('kategori_usia', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}

	}

	public function  get_all_kategori_usia(){
		return $this->db->get('kategori_usia')
						->result();
	}

	public function  get_specific_kategori_usia($id_kategori_usia){
		return $this->db->where('id_kategori_usia', $id_kategori_usia)
						->get('kategori_usia')
						->row();
	}

	public function  cek_ketergantungan_kategori_usia($id){
		 $this->db->where('kategori_usia.id_kategori_usia', $id)
		 				->join('kategori_lomba', 'kategori_lomba.id_kategori_usia = kategori_usia.id_kategori_usia')
						->get('kategori_usia')
						->row();
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}			
	}






/*Kategori Lomba*/

	public function insert_kategori_lomba(){
		$data = array(
					"nama_kategori_lomba" => $this->input->post('nama_kategori_lomba'),
					"id_kategori_usia" => $this->input->post('id_kategori_usia'),
					"keterangan" =>$this->input->post('keterangan')
		);

		$this->db->insert('kategori_lomba', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}

	}

	public function hapus_kategori_lomba(){
		$this->db->where('id_kategori_lomba', $this->input->post('id_kategori'))
				 ->delete('kategori_lomba');
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}


	public function edit_kategori_lomba(){
		$data = array(
					"nama_kategori_lomba" => $this->input->post('nama_kategori_lomba'),
					"id_kategori_usia" => $this->input->post('id_kategori_usia'),
					"keterangan" =>$this->input->post('keterangan')
		);

		$this->db->where('id_kategori_lomba', $this->uri->segment(3))
				->update('kategori_lomba', $data);
				$this->output->enable_profiler(TRUE);
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}

	}

	public function  get_all_kategori_lomba(){
		return $this->db->join('kategori_usia', 'kategori_lomba.id_kategori_usia = kategori_usia.id_kategori_usia')
						->get('kategori_lomba')
						->result();
	}

	public function  get_specific_kategori_lomba($id_kelas_tanding){
		return $this->db->where('id_kelas_tanding', $id_kelas_tanding)
						->get('kelas_tanding')
						->row();
	}














	/*Kelas Tanding*/
	public function insert_kategori_kelas_tanding(){
		$data = array(
					"label" => $this->input->post('label'),
					"berat_minimal" =>$this->input->post('berat_minimal'),
					"berat_maksimal" =>$this->input->post('berat_maksimal'),
					"id_kategori_lomba" => $this->input->post('id_kategori_lomba'),
					"keterangan" =>$this->input->post('keterangan')
		);

		$this->db->insert('kelas_tanding', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}

	}

	public function hapus_kategori_kelas_tanding(){
		$this->db->where('id_kategori_kelas_tanding', $this->input->post('id_kategori'))
				 ->delete('kategori_kelas_tanding');
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}


	public function edit_kategori_kelas_tanding(){
		$data = array(
					"label" => $this->input->post('label'),
					"berat_minimal" =>$this->input->post('berat_minimal'),
					"berat_maksimal" =>$this->input->post('berat_maksimal'),
					"id_kategori_lomba" => $this->input->post('id_kategori_lomba'),
					"keterangan" =>$this->input->post('keterangan')
		);

		$this->db->where('id_kelas_tanding', $this->uri->segment(3))
				->update('kelas_tanding', $data);
				$this->output->enable_profiler(TRUE);
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}

	}

	public function  get_all_kategori_kelas_tanding(){
		return $this->db->select('kelas_tanding.id_kelas_tanding, kelas_tanding.label, kelas_tanding.keterangan, kelas_tanding.berat_minimal, .kelas_tanding.berat_maksimal, kategori_lomba.id_kategori_lomba, kategori_lomba.nama_kategori_lomba, kategori_usia.nama_kategori, kategori_usia.jenis_kelamin')
						->join('kategori_lomba', 'kategori_lomba.id_kategori_lomba = kelas_tanding.id_kategori_lomba')
						->join('kategori_usia', 'kategori_usia.id_kategori_usia = kategori_lomba.id_kategori_usia')
						->get('kelas_tanding')
						->result();
	}

	public function  get_specific_kategori_kelas_tanding($id_kategori_kelas_tanding){
		return $this->db->where('id_kelas_tanding', $id_kategori_kelas_tanding)
						->get('kelas_tanding')
						->row();
	}

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */