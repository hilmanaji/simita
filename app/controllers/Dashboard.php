<?php 

class Dashboard extends Controller {
	public function index () {
		$data['judul'] = 'Home';
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('dashboard/index', $data);
		$this->view('templates/footer');
	}
}