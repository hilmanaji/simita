<?php

class Kontrak extends Controller {
    public function index (){
		$data['judul'] = 'Kontrak';
		$data['sub_judul'] = 'Daftar Kontrak';
		$data['data_kontrak'] = $this->model('DataHandle')->getAll($table = 'tbl_no_kontrak');
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('kontrak/index', $data);
		$this->view('templates/footer');
	}
	
	public function tambahData() {
		$data['judul'] = 'Kontrak';
		$data['sub_judul'] = 'Tambah Kontrak';
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('kontrak/v_tambah_kontrak',$data);
		$this->view('templates/footer');
	}

	public function tambah() {
		if( $this->model('DataHandle')->tambahDataKontrak($_POST) > 0) {
			Flasher::setFlash('Berhasil','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/kontrak/index');
			exit;
		} else {
			Flasher::setFlash('gagal','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/kontrak/index');
			exit;
		}
	}

	public function hapus($id) {
		if( $this->model('DataHandle')->hapusData($id, $table = 'tbl_kontrak', $id_table = 'id_kontrak') > 0) {
			Flasher::setFlash('Berhasil','dihapus','CssHapus');
			header('Location: ' . BASEURL . '/kontrak/index');
			exit;
		} else {
			Flasher::setFlash('Gagal','ditambahkan','CssHapus');
			header('Location: ' . BASEURL . '/kontrak/index');
			exit;
		}
	}
 
	public function getUbah($id){
		$data['judul'] = 'Ubah Data kontrak';
		$data['sub_judul'] = 'Ubah Data kontrak';
		$data['data_kontrak'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_kontrak',$id_table = 'id_kontrak', $id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('kontrak/v_ubah_kontrak', $data);
		$this->view('templates/footer');
	}

	
	public function ubahData() {
		if( $this->model('DataHandle')->ubahDataKontrak ($_POST) > 0) {
			Flasher::setFlash('Berhasil','diubah','CssUpdate');
			header('Location: ' . BASEURL . '/kontrak/index');
			exit;
		} else {
			Flasher::setFlash('gagal','diubah','CssUpdate');
			header('Location: ' . BASEURL . '/kontrak/index');
			exit;
		}
	}

}