<?php

class Project extends Controller {
	public function __construct(){
		if(!isset($_SESSION["username"]))  {  
			header('Location: ' . BASEURL . '/login/index');  
		}
	}

    public function index (){
		$data['judul'] = 'Project';
		$data['sub_judul'] = 'Daftar Project';

		if ($_SESSION["role_user"] == 'Admin Project') {
			$data['data_project'] = $this->model('DataHandle')->getProject();

		}else {
			$id_mitra = $_SESSION['id_mitra'];
			$data['data_project'] = $this->model('DataHandle')->getProjectById($id_mitra);
		}

		//$data['data_project'] = $this->model('DataHandle')->getAll($table = 'tbl_lop');
		// var_dump($data);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
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
		$data['data_mitra'] = $this->model('DataHandle')->getAll($table = 'tbl_mitra');
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('project/v_tambah_project',$data);
		$this->view('templates/footer');
	}

	public function tambah() {
		// var_dump($_POST);
		
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
		$data['judul'] = 'Project';
		$data['sub_judul'] = 'Ubah Data Project';
		$data['data_project'] = $this->model('DataHandle')->getProjectByIdp($id);
		$data['data_po'] = $this->model('DataHandle')->getAll($table = 'tbl_po');
		
		// var_dump ($data);
		 $this->view('templates/header', $data);
		 $this->view('templates/sidebar', $data);
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