<?php

class Sto extends Controller {
	public function __construct(){
		Flasher::startSession();	
	}
	
    
    public function index () {
        $data['judul'] = 'STO';
		$data['sub_judul'] = 'Daftar STO';
		$data['data_sto'] = $this->model('DataHandle')->getAll($table = 'tbl_sto');
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('sto/index', $data);
		$this->view('templates/footer');
    }

    public function tambahData() {
		$data['judul'] = 'STO';
		$data['sub_judul'] = 'Tambah STO';
		$data['data_datel'] = $this->model('DataHandle')->getAll($table = 'tbl_datel');
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('sto/v_tambah_sto',$data);
		$this->view('templates/footer');
	}

	public function tambah() {
		if( $this->model('DataHandle')->tambahDataSto($_POST) > 0) {
			Flasher::setFlash('Berhasil','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/sto/index');
			exit;
		} else {
			Flasher::setFlash('gagal','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/sto/index');
			exit;
		}
	}

	public function hapus($id) {
		if( $this->model('DataHandle')->hapusData($id, $table = 'tbl_sto', $id_table = 'id_sto') > 0) {
			Flasher::setFlash('Berhasil','dihapus','CssHapus');
			header('Location: ' . BASEURL . '/sto/index');
			exit;
		} else {
			Flasher::setFlash('Gagal','ditambahkan','CssHapus');
			header('Location: ' . BASEURL . '/sto/index');
			exit;
		}
	}
 
	public function getUbah($id, $id_dat){
		$data['judul'] = 'STO';
		$data['sub_judul'] = 'Ubah Data STO';
		$data['data_sto'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_sto',$id_table = 'id_sto', $id);
		$data['data_datel'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_datel',$id_table = 'id_datel', $id_dat);
		$data['data_dat'] = $this->model('DataHandle')->getAll($table = 'tbl_datel');

		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('sto/v_ubah_sto', $data);
		$this->view('templates/footer');
	}

	
	public function ubahData() {
		if( $this->model('DataHandle')->ubahDataSto ($_POST) > 0) {
			Flasher::setFlash('Berhasil','diubah','CssUpdate');
			header('Location: ' . BASEURL . '/sto/index');
			exit;
		} else {
			Flasher::setFlash('gagal','diubah','CssUpdate');
			header('Location: ' . BASEURL . '/sto/index');
			exit;
		}
	}

    
}