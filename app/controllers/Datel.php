<?php

class Datel extends Controller {
	public function __construct(){
		Flasher::startSession();	
	}
	
    public function index (){
		$data['judul'] = 'Datel';
		$data['sub_judul'] = 'Daftar Datel';
		$data['data_datel'] = $this->model('DataHandle')->getAll($table = 'tbl_datel');
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('datel/index', $data);
		$this->view('templates/footer');
	}
	
	public function tambahData() {
		$data['judul'] = 'Datel';
		$data['sub_judul'] = 'Tambah Datel';
		$data['data_witel'] = $this->model('DataHandle')->getAll($table = 'tbl_witel');
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('datel/v_tambah_datel',$data);
		$this->view('templates/footer');
	}

	public function tambah() {
		if( $this->model('DataHandle')->tambahDataDatel($_POST) > 0) {
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
 
	public function getUbah($id, $id_wit){
		$data['judul'] = 'Datel';
		$data['sub_judul'] = 'Ubah Data Datel';
		$data['data_datel'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_datel',$id_table = 'id_datel', $id);
		$data['data_witel'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_witel',$id_table = 'id_witel', $id_wit);
		$data['data_wit'] = $this->model('DataHandle')->getAll($table = 'tbl_witel');
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('datel/v_ubah_datel', $data);
		$this->view('templates/footer');
	}

	
	public function ubahData() {
		if( $this->model('DataHandle')->ubahDataDatel ($_POST) > 0) {
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