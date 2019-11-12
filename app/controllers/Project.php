<?php

class Project extends Controller {
    public function index (){
		$data['judul'] = 'Project';
		$data['sub_judul'] = 'Daftar Project';

		if ($_SESSION["role_user"] == 'admin') {
			$data['data_project'] = $this->model('DataHandle')->getAll($table = 'tbl_lop');
		}else {
			$id_mitra = $_SESSION['id_mitra'];
			$data['data_project'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_lop', $id_table = 'id_mitra', $id_mitra);
		}

		//$data['data_project'] = $this->model('DataHandle')->getAll($table = 'tbl_lop');
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('project/index', $data);
		$this->view('templates/footer');
	}
	
	public function tambahData() {
		$data['judul'] = 'Project';
		$data['sub_judul'] = 'Tambah Project';
		$data['data_po'] = $this->model('DataHandle')->getAll($table = 'tbl_po');
		$data['data_regional'] = $this->model('DataHandle')->getAll($table = 'tbl_regional');
		$data['data_witel'] = $this->model('DataHandle')->getAll($table = 'tbl_witel');
		$data['data_datel'] = $this->model('DataHandle')->getAll($table = 'tbl_datel');
		$data['data_sto'] = $this->model('DataHandle')->getAll($table = 'tbl_sto');
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('project/v_tambah_project',$data);
		$this->view('templates/footer');
	}

	public function tambah() {
		if( $this->model('DataHandle')->tambahDataProject($_POST) > 0) {
			Flasher::setFlash('Berhasil','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/project/index');
			exit;
		} else {
			Flasher::setFlash('gagal','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/project/index');
			exit;
		}
	}

	public function hapus($id) {
		if( $this->model('DataHandle')->hapusData($id, $table = 'tbl_lop', $id_table = 'id_project') > 0) {
			Flasher::setFlash('Berhasil','dihapus','CssHapus');
			header('Location: ' . BASEURL . '/project/index');
			exit;
		} else {
			Flasher::setFlash('Gagal','ditambahkan','CssHapus');
			header('Location: ' . BASEURL . '/project/index');
			exit;
		}
	}
 
	public function getUbah($id){
		$data['judul'] = 'Ubah Data Project';
		$data['sub_judul'] = 'Ubah Data Project';
		$data['data_project'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_lop',$id_table = 'id_project', $id);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('project/v_ubah_project', $data);
		$this->view('templates/footer');
	}

	
	public function ubahData() {
		if( $this->model('DataHandle')->ubahDataProject ($_POST) > 0) {
			Flasher::setFlash('Berhasil','diubah','CssUpdate');
			header('Location: ' . BASEURL . '/project/index');
			exit;
		} else {
			Flasher::setFlash('Gagal','diubah','CssUpdate');
			header('Location: ' . BASEURL . '/project/index');
			exit;
		}
	}

}