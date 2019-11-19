<?php 

class Dashboard extends Controller {
	public function __construct(){
		if(!isset($_SESSION["username"]))  {  
			header('Location: ' . BASEURL . '/login/index');  
		}
		
	}
	public function index () {
		$data['judul'] = 'Dashboard';
		
		$this->view('templates/header', $data);
		$this->view('templates/sidebar',$data);
		$this->view('dashboard/index', $data);
		$this->view('templates/footer');
	}
}