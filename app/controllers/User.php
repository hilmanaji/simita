<?php

class User extends Controller {
    public function index() {
        $data['judul'] = 'User';
		$data['sub_judul'] = 'Daftar User';
		$data['data_user'] = $this->model('DataHandle')->getAll($table = 'tbl_user');
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('user/index', $data);
        $this->view('templates/footer');
    }

    public function tambahData() {
		$data['judul'] = 'User';
		$data['sub_judul'] = 'Tambah User';
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('user/v_tambah_user',$data);
		$this->view('templates/footer');
	}

	public function tambah() {
		if( $this->model('DataHandle')->tambahDataUser($_POST) > 0) {
			Flasher::setFlash('Berhasil','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/user/index');
			exit;
		} else {
			Flasher::setFlash('gagal','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/user/index');
			exit;
		}
	}

	public function hapus($id) {
		if( $this->model('DataHandle')->hapusData($id, $table = 'tbl_user', $id_table = 'id_user') > 0) {
			Flasher::setFlash('Berhasil','dihapus','CssHapus');
			header('Location: ' . BASEURL . '/user/index');
			exit;
		} else {
			Flasher::setFlash('Gagal','ditambahkan','CssHapus');
			header('Location: ' . BASEURL . '/user/index');
			exit;
		}
	}
 
	public function getUbah($id){
		$data['judul'] = 'Ubah Data User';
		$data['sub_judul'] = 'Ubah Data User';
		$data['data_user'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_user',$id_table = 'id_user', $id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('user/v_ubah_user', $data);
		$this->view('templates/footer');
	}

	
	public function ubahData() {
		if( $this->model('DataHandle')->ubahDataUser ($_POST) > 0) {
			Flasher::setFlash('Berhasil','diubah','CssUpdate');
			header('Location: ' . BASEURL . '/user/index');
			exit;
		} else {
			Flasher::setFlash('gagal','diubah','CssUpdate');
			header('Location: ' . BASEURL . '/user/index');
			exit;
		}
	}   
}