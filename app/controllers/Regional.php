<?php

class Regional extends Controller {
	public function __construct(){
		Flasher::startSession();	
	}
	
    public function index (){
		$data['judul'] = 'Teritori';
		$data['sub_judul'] = 'Daftar Regional';
		$data['data_regional'] = $this->model('DataHandle')->getAll($table = 'tbl_regional');
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('regional/index', $data);
		$this->view('templates/footer');
	}
	
	public function tambahData() {
		$data['judul'] = 'Teritori';
		$data['sub_judul'] = 'Tambah Regional';
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('regional/v_tambah_regional',$data);
		$this->view('templates/footer');
	}

	public function tambah() {
		if( $this->model('DataHandle')->tambahDataRegional($_POST) > 0) {
			Flasher::setFlash('Berhasil','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/regional/index');
			exit;
		} else {
			Flasher::setFlash('gagal','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/regional/index');
			exit;
		}
	}

	public function hapus($id) {
		if( $this->model('DataHandle')->hapusData($id, $table = 'tbl_regional', $id_table = 'id_regional') > 0) {
			Flasher::setFlash('Berhasil','dihapus','CssHapus');
			header('Location: ' . BASEURL . '/regional/index');
			exit;
		} else {
			Flasher::setFlash('Gagal','ditambahkan','CssHapus');
			header('Location: ' . BASEURL . '/regional/index');
			exit;
		}
	}
 
	public function getUbah($id){
		$data['judul'] = 'Ubah Data Regional';
		$data['sub_judul'] = 'Ubah Data Regional';
		$data['data_regional'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_regional',$id_table = 'id_regional', $id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('regional/v_ubah_regional', $data);
		$this->view('templates/footer');
	}

	
	public function ubahData() {
		if( $this->model('DataHandle')->ubahDataRegional ($_POST) > 0) {
			Flasher::setFlash('Berhasil','diubah','CssUpdate');
			header('Location: ' . BASEURL . '/regional/index');
			exit;
		} else {
			Flasher::setFlash('gagal','diubah','CssUpdate');
			header('Location: ' . BASEURL . '/regional/index');
			exit;
		}
	}
	

}