<?php

class StatusProject extends Controller {
	public function __construct(){
		Flasher::startSession();	
    }
    
    public function index (){
		$data['judul'] = 'Status Project';
		$data['sub_judul'] = 'Daftar Status Project';
        $data['data_status_project'] = $this->model('DataHandle')->getAll($table = 'tbl_status_project');
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('status_project/index', $data);
		$this->view('templates/footer');
	}
	
	public function tambahData() {
		$data['judul'] = 'Status Project';
		$data['sub_judul'] = 'Tambah Status Project';
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('status_project/v_tambah_status_project',$data);
		$this->view('templates/footer');
	}

	public function tambah() {
		if( $this->model('DataHandle')->tambahDataStatusProject($_POST) > 0) {
			Flasher::setFlash('Berhasil','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/StatusProject/index');
			exit;
		} else {
			Flasher::setFlash('gagal','ditambahkan','CssHapus');
			header('Location: ' . BASEURL . '/StatusProject/index');
			exit;
		}
	}

	public function hapus($id) {
		if( $this->model('DataHandle')->hapusData($id, $table = 'tbl_status_project', $id_table = 'id_kegiatan') > 0) {
			Flasher::setFlash('Berhasil','dihapus','CssHapus');
			header('Location: ' . BASEURL . '/StatusProject/index');
			exit;
		} else {
			Flasher::setFlash('Gagal','ditambahkan','CssHapus');
			header('Location: ' . BASEURL . '/StatusProject/index');
			exit;
		}
	}
 
	public function getUbah($id){
		$data['judul'] = 'Status Project';
		$data['sub_judul'] = 'Ubah Data Status Project';
		$data['data_status_project'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_status_project',$id_table = 'id_kegiatan', $id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('status_project/v_ubah_status_project', $data);
		$this->view('templates/footer');
	}

	public function ubahData() {
		if( $this->model('DataHandle')->ubahDataStatusProject ($_POST) > 0) {
			Flasher::setFlash('Berhasil','diubah','CssUpdate');
			header('Location: ' . BASEURL . '/StatusProject/index');
			exit;
		} else {
			Flasher::setFlash('Gagal','diubah','CssUpdate');
			header('Location: ' . BASEURL . '/StatusProject/index');
			exit;
		}
	}

}