<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class M_data extends CI_Model {

	public function view(){
		return $this->db->get('mahasiswa')->result();
	}

	public function view_by($nis){
		$this->db->where('nis', $nis);
		return $this->db->get('mahasiswa')->row();
	}

	public function validation($mode){
		$this->load->library('form_validation');
		if($mode == "save")
			$this->form_validation->set_rules('input_nis', 'NIS', 'required|numeric|max_length[11]');

		$this->form_validation->set_rules('input_nama', 'Nama', 'required|max_length[50]');
		$this->form_validation->set_rules('input_jeniskelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('input_telp', 'Telp', 'required|numeric|max_length[15]');
		$this->form_validation->set_rules('input_alamat', 'Alamat', 'required');

		if($this->form_validation->run())
			return TRUE;
		else
			return FALSE;
	}

		public function save(){
			$data = array(
				"nis" => $this->input->post('input_nis'),
				"nama" => $this->input->post('input_nama'),
				"jenis_kelamin" => $this->input->post('input_jeniskelamin'),
				"telp" => $this->input->post('input_telp'),
				"alamat" => $this->input->post('input_alamat')
			);

			$this->db->insert('mahasiswa', $data);
		}

		public function edit($nis){
			$data = array(
				"nama" => $this->input->post('input_nama'),
				"jenis_kelamin" => $this->input->post('input_jeniskelamin'),
				"telp" => $this->input->post('input_telp'),
				"alamat" => $this->input->post('input_alamat')
			);

			$this->db->where('nis', $nis);
			$this->db->update('mahasiswa', $data);
		}

		public function delete($nis){
			$this->db->where('nis', $nis);
			$this->db->delete('mahasiswa');
		}

		public function get_product_keyword($keyword) //Fungsi untuk meminta keyword yang ingin di cari
		{
			$this->db->select('*');
			$this->db->from('mahasiswa'); //Menyortir melalui database mahasiswa
			$this->db->like('nama',$keyword);//Menyortir menurut Nama
			$this->db->or_like('nis',$keyword);//Menyortir menurut NIM
			$this->db->or_like('jenis_kelamin',$keyword);//Menyortir menurut Jenis Kelamin 
			$this->db->or_like('telp',$keyword);//Menyortir menurut Nomor Telp
			$this->db->or_like('alamat',$keyword);//Menyortir menurut Alamat

			return $this->db->get()->result();//Hasil
		}
	}
?>