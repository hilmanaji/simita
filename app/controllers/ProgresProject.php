<?php

class ProgresProject extends Controller {
    public function index () {
        $data['judul'] = 'Progres Project';
        $data['sub_judul'] = 'Update Perkembangan Project';
        if ($_SESSION["role_user"] == 'Admin Project') {
			$data['data_project'] = $this->model('DataHandle')->getProject();

		}else {
			$id_mitra = $_SESSION['id_mitra'];
			$data['data_project'] = $this->model('DataHandle')->getProjectById($id_mitra);
		}

        $this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('progres_project/index',$data);
		$this->view('templates/footer');
    }

    public function updateProject ($id) {
        $data['judul'] = 'Progres Project';
		$data['sub_judul'] = 'Update Perkembangan Project';
		$data['data_project'] = $this->model('DataHandle')->getProjectByIdp($id);
        $data['data_progres'] = $this->model('DataHandle')->getDataProgresById ($id);
        $data['data_status'] = $this->model('DataHandle')->getAll($table = 'tbl_status_project');


        $this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('progres_project/v_progres_project',$data);
		$this->view('templates/footer');
    }

    public function tambahProgres () {
		// var_dump($_POST);
		
        if( $this->model('DataHandle')->tambahDataProgres($_POST) > 0) {
			Flasher::setFlash('Berhasil','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/ProgresProject/index');
			exit;
		} else {
			Flasher::setFlash('gagal','ditambahkan','CssTambah');
			header('Location: ' . BASEURL . '/ProgresProject/index');
			exit;
		}
	}

	public function ubahProgres ($id) {
        $data['judul'] = 'Progres Project';
		$data['sub_judul'] = 'Ubah Detail Progres';
		$data['data_project'] = $this->model('DataHandle')->getProjectByIdp($id);
        $data['data_progres'] = $this->model('DataHandle')->getDataProgresById ($id);
        $data['data_status'] = $this->model('DataHandle')->getAll($table = 'tbl_status_project');


        $this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('progres_project/v_ubah_progres',$data);
		$this->view('templates/footer');
    }
	
	

}