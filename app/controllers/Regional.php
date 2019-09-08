<?php

class Regional extends Controller {
    public function index (){
		$data['judul'] = 'Daftar Regional';
		$data['data_regional'] = $this->model('DataHandle')->getAll($table = 'tbl_regional');
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('regional/index', $data);
		$this->view('templates/footer');
	}

	public function detail ($id_regional){
		$data['judul'] = 'Daftar Regional';
		$data['data_regional'] = $this->model('DataHandle')->getAllWhere($table = 'tbl_regional', $id_regional);
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('regional/v_detail', $data);
		$this->view('templates/footer');
	}
	

}