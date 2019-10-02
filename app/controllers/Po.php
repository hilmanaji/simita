<?php

class Po extends Controller {
    public function index (){
		$data['judul'] = 'Purchase Order';
		$data['sub_judul'] = 'List Purchase Order';
		$data['data_po'] = $this->model('DataHandle')->getAll($table = 'tbl_po');
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('po/index', $data);
		$this->view('templates/footer');
	}
	
	public function tambahData() {
		$data['judul'] = 'Purchase Order';
		$data['sub_judul'] = 'Tambah PO';
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('po/v_tambah_po',$data);
		$this->view('templates/footer');
	}

	public function tambah() {
		if( $this->model('DataHandle')->tambahDataPo($_POST) > 0) {
			Flasher::setFlash('Berhasil','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/po/index');
			exit;
		} else {
			Flasher::setFlash('gagal','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/po/index');
			exit;
		}
	}

	public function hapus($id) {
		if( $this->model('DataHandle')->hapusData($id, $table = 'tbl_po', $id_table = 'id_po') > 0) {
			Flasher::setFlash('Berhasil','dihapus','CssHapus');
			header('Location: ' . BASEURL . '/po/index');
			exit;
		} else {
			Flasher::setFlash('Gagal','dihapus','CssHapus');
			header('Location: ' . BASEURL . '/po/index');
			exit;
		}
	}
 
	public function getUbah($id){
		$data['judul'] = 'Ubah Data PO';
		$data['sub_judul'] = 'Ubah Data PO';
		$data['data_po'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_po',$id_table = 'id_po', $id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('po/v_ubah_po', $data);
		$this->view('templates/footer');
	}

	
	public function ubahData() {
		if( $this->model('DataHandle')->ubahDataPo ($_POST) > 0) {
			Flasher::setFlash('Berhasil','diubah','CssUpdate');
			header('Location: ' . BASEURL . '/po/index');
			exit;
		} else {
			Flasher::setFlash('gagal','diubah','CssUpdate');
			header('Location: ' . BASEURL . '/po/index');
			exit;
		}
	}

}