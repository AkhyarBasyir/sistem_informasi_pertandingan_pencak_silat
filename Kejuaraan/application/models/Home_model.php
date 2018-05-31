<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function insert_daftar_pesilat($nama_foto, $nama_arsip){

		$data = array("nama_peserta" => $this->input->post('nama'),
					"jenis_kelamin" => $this->input->post('jenis_kelamin'),
					"tinggi_badan" => $this->input->post('tinggi_badan'),
					"berat_badan" => $this->input->post('berat_badan'),
					"tempat_lahir" => $this->input->post('tempat_lahir'),
					"tanggal_lahir" => $this->input->post('tanggal_lahir'),
					"kategori" => implode(" ", $this->input->post('kategori')),
					"sub_kategori" => implode(" ", $this->input->post('sub-kategori-seni')),
					"alamat" => $this->input->post('alamat'),
					"foto" => $nama_foto,
					"arsip_peserta" => $nama_arsip
					);		
		$this->db->insert('peserta', $data);
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}

	public function insert_daftar_kontingen(){

		$penanggungjawab = array("nama_penanggungjawab" => $this->input->post('nama_penanggungjawab'),
					"jabatan" => $this->input->post('jabatan'),
					"nomor_telepon" => $this->input->post('nomor_telepon_penanggungjawab'),
					"alamat" => $this->input->post('alamat')
					);		
		$this->db->insert('penanggungjawab', $penanggungjawab);
		$id_penanggungjawab = $this->db->where('nama_penanggungjawab', $this->input->post('nama_penanggungjawab'))
								->get('penanggungjawab')
						 		->row('id_penanggungjawab');

		if ($this->input->post('sub_kategori') == null) {
			$kontingen['sub_kategori'] = "belum diisi";
		}else{
			$kontingen['sub_kategori'] = implode(" ", $this->input->post('sub_kategori'));
		}
		$kontingen = array(
					"id_kontingen" => null,
					"nama_kontingen" => $this->input->post('nama_kontingen'),
					"id_penanggungjawab" => $id_penanggungjawab,
					"nomor_telepon" => $this->input->post('nomor_telepon'),
					"kategori" => implode(" ", $this->input->post('kategori')),
					"usia" => implode(" ", $this->input->post('usia'))
					);	

		$this->db->insert('kontingen', $kontingen);
		if ($this->db->affected_rows() > 0) {
			return true;
		}else{
			return false;
		}
	}

	public function get_all_kontingen(){
		return $this->db->get('kontingen')
						 ->result();
	}

}

/* End of file home_model.php */
/* Location: ./application/models/home_model.php */