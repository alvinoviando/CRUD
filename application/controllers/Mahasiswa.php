<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('M_data');
	}

	public function index(){
		$data['mahasiswa'] = $this->M_data->view();
		$this->load->view('index', $data);
	}

	public function tambah(){
		if($this->input->post('submit')){
			if($this->M_data->validation("save")){
				$this->M_data->save();
				redirect('mahasiswa');
			}
		}

		$this->load->view('form_tambah');
	}

	public function ubah($nis){
		if($this->input->post('submit')){
			if($this->M_data->validation("update")){
				$this->M_data->edit($nis);
				redirect('mahasiswa');
			}
		}

		$data['mahasiswa'] = $this->M_data->view_by($nis);
		$this->load->view('form_ubah', $data);
	}

	public function hapus($nis){
	$this->M_data->delete($nis);
	redirect('mahasiswa');
	}
	
	public function search(){
	$keyword = $this->input->post('keyword'); //Meminta Keyword
	$data['mahasiswa']=$this->M_data->get_product_keyword($keyword);//Meminta Data melalui M_data->get_product_keyword
	$this->load->view('search',$data);//Berfungsi untuk menampilkan data di view.php
}
}


?>
