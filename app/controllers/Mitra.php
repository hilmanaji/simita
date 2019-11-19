<?php

class Mitra extends Controller {
    public function index (){
		$data['judul'] = 'Mitra';
		$data['sub_judul'] = 'Daftar Mitra';
		$data['data_mitra'] = $this->model('DataHandle')->getAll($table = 'tbl_mitra');
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('mitra/index', $data);
		$this->view('templates/footer');
	}
	
	public function tambahData() {
		$data['judul'] = 'mitra';
		$data['sub_judul'] = 'Tambah Mitra';
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('mitra/v_tambah_mitra',$data);
		$this->view('templates/footer');
	}

	public function tambah() {
		if( $this->model('DataHandle')->tambahDataMitra($_POST) > 0) {
			Flasher::setFlash('Berhasil','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/mitra/index');
			exit;
		} else {
			Flasher::setFlash('gagal','ditambahkan','CssHapus');
			header('Location: ' . BASEURL . '/mitra/index');
			exit;
		}
	}

	public function hapus($id) {
		if( $this->model('DataHandle')->hapusData($id, $table = 'tbl_mitra', $id_table = 'id_mitra') > 0) {
			Flasher::setFlash('Berhasil','dihapus','CssHapus');
			header('Location: ' . BASEURL . '/mitra/index');
			exit;
		} else {
			Flasher::setFlash('Gagal','ditambahkan','CssHapus');
			header('Location: ' . BASEURL . '/mitra/index');
			exit;
		}
	}
 
	public function getUbah($id){
		$data['judul'] = 'Ubah Data Mitra';
		$data['sub_judul'] = 'Ubah Data Mitra';
		$data['data_mitra'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_mitra',$id_table = 'id_mitra', $id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('mitra/v_ubah_mitra', $data);
		$this->view('templates/footer');
	}

	
	public function ubahData() {
		if( $this->model('DataHandle')->ubahDataMitra ($_POST) > 0) {
			Flasher::setFlash('Berhasil','diubah','CssUpdate');
			header('Location: ' . BASEURL . '/mitra/index');
			exit;
		} else {
			Flasher::setFlash('gagal','diubah','CssHapus');
			header('Location: ' . BASEURL . '/mitra/index');
			exit;
		}
	}

}