<?php

class Datel extends Controller {
    public function index (){
		$data['judul'] = 'Teritori';
		$data['sub_judul'] = 'Daftar Datel';
		$data['data_datel'] = $this->model('DataHandle')->getAll($table = 'tbl_datel');
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('datel/index', $data);
		$this->view('templates/footer');
	}
	
	public function tambahData() {
		$data['judul'] = 'Teritori';
		$data['sub_judul'] = 'Tambah Datel';
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('datel/v_tambah_datel',$data);
		$this->view('templates/footer');
	}

	public function tambah() {
		if( $this->model('DataHandle')->tambahDatadatel($_POST) > 0) {
			Flasher::setFlash('Berhasil','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/datel/index');
			exit;
		} else {
			Flasher::setFlash('gagal','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/datel/index');
			exit;
		}
	}

	public function hapus($id) {
		if( $this->model('DataHandle')->hapusData($id, $table = 'tbl_datel', $id_table = 'id_datel') > 0) {
			Flasher::setFlash('Berhasil','dihapus','CssHapus');
			header('Location: ' . BASEURL . '/datel/index');
			exit;
		} else {
			Flasher::setFlash('Gagal','ditambahkan','CssHapus');
			header('Location: ' . BASEURL . '/datel/index');
			exit;
		}
	}
 
	public function getUbah($id){
		$data['judul'] = 'Ubah Data Datel';
		$data['sub_judul'] = 'Ubah Data Datel';
		$data['data_datel'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_datel',$id_table = 'id_datel', $id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('datel/v_ubah_datel', $data);
		$this->view('templates/footer');
	}

	
	public function ubahData() {
		if( $this->model('DataHandle')->ubahDatadatel ($_POST) > 0) {
			Flasher::setFlash('Berhasil','diubah','CssUpdate');
			header('Location: ' . BASEURL . '/datel/index');
			exit;
		} else {
			Flasher::setFlash('gagal','diubah','CssUpdate');
			header('Location: ' . BASEURL . '/datel/index');
			exit;
		}
	}
	

}