<?php

class Sto extends Controller {
    
    public function index () {
        $data['judul'] = 'Teritori';
		$data['sub_judul'] = 'Daftar STO';
		$data['data_sto'] = $this->model('DataHandle')->getAll($table = 'tbl_sto');
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('sto/index', $data);
		$this->view('templates/footer');
    }

    public function tambahData() {
		$data['judul'] = 'Teritori';
		$data['sub_judul'] = 'Tambah STO';
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('sto/v_tambah_sto',$data);
		$this->view('templates/footer');
	}

	public function tambah() {
		if( $this->model('DataHandle')->tambahDatasto($_POST) > 0) {
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
 
	public function getUbah($id){
		$data['judul'] = 'Ubah Data STO';
		$data['sub_judul'] = 'Ubah Data STO';
		$data['data_sto'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_sto',$id_table = 'id_sto', $id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('sto/v_ubah_sto', $data);
		$this->view('templates/footer');
	}

	
	public function ubahData() {
		if( $this->model('DataHandle')->ubahDatasto ($_POST) > 0) {
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