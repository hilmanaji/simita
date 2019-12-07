<?php

class StatusPo extends Controller {
	public function __construct(){
		Flasher::startSession();
    }
    
    public function index (){
		$data['judul'] = 'Status Po';
		$data['sub_judul'] = 'Daftar Status Dokumen Po';
        $data['data_status_po'] = $this->model('DataHandle')->getAll($table = 'tbl_status_po');
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('status_po/index', $data);
		$this->view('templates/footer');
	}
	
	public function tambahData() {
		$data['judul'] = 'Status Po';
		$data['sub_judul'] = 'Tambah Status Po';
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('status_po/v_tambah_status_po',$data);
		$this->view('templates/footer');
	}

	public function tambah() {
		if( $this->model('DataHandle')->tambahDataStatusPo($_POST) > 0) {
			Flasher::setFlash('Berhasil','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/StatusPo/index');
			exit;
		} else {
			Flasher::setFlash('gagal','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/StatusPo/index');
			exit;
		}
	}

	public function hapus($id) {
		if( $this->model('DataHandle')->hapusData($id, $table = 'tbl_status_po', $id_table = 'id_status_po') > 0) {
			Flasher::setFlash('Berhasil','dihapus','CssHapus');
			header('Location: ' . BASEURL . '/StatusPo/index');
			exit;
		} else {
			Flasher::setFlash('Gagal','ditambahkan','CssHapus');
			header('Location: ' . BASEURL . '/StatusPo/index');
			exit;
		}
	}
 
	public function getUbah($id){
		$data['judul'] = 'Status Po';
		$data['sub_judul'] = 'Ubah Data Status Po';
		$data['data_status_po'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_status_po',$id_table = 'id_status_po', $id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('status_po/v_ubah_status_po', $data);
		$this->view('templates/footer');
	}

	public function ubahData() {
		if( $this->model('DataHandle')->ubahDataStatusPo ($_POST) > 0) {
			Flasher::setFlash('Berhasil','diubah','CssUpdate');
			header('Location: ' . BASEURL . '/StatusPo/index');
			exit;
		} else {
			Flasher::setFlash('Gagal','diubah','CssUpdate');
			header('Location: ' . BASEURL . '/StatusPo/index');
			exit;
		}
	}

}