<?php 

class Dashboard extends Controller {
	public function __construct(){
		if(!isset($_SESSION["username"]))  {  
			header('Location: ' . BASEURL . '/login/index');  
		}
		
	}
	public function index () {
		$data['judul'] = 'Home';
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('dashboard/index', $data);
		$this->view('templates/footer');
	}
}