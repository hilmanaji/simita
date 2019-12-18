<?php
class Laporan extends Controller {
    public function index() {
        $data['judul'] = 'Laporan';
		$data['sub_judul'] = 'Cetak Laporan';
		
		if ($_SESSION["role_user"] == 'Admin Project') {
			$data['data_project'] = $this->model('DataHandle')->getProject();

		}else {
			$id_mitra = $_SESSION['id_mitra'];
			$data['data_project'] = $this->model('DataHandle')->getProjectById($id_mitra);
		}
        
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('laporan/index', $data);
		$this->view('templates/footer');
    }
    public function getData() {
        $data['judul'] = 'Laporan';
        $data['sub_judul'] = 'Cetak Laporan';
        if ($_SESSION["role_user"] == 'Admin Project') {
			$data['data_project'] = $this->model('DataHandle')->getProject();

		}else {
			$id_mitra = $_SESSION['id_mitra'];
			$data['data_project'] = $this->model('DataHandle')->getProjectById($id_mitra);
		}
        
        
		$this->view('templates/header', $data);
		//$this->view('templates/sidebar', $data);
		$this->view('laporan/v_laporan', $data);
		//$this->view('templates/footer');
	}
	
}