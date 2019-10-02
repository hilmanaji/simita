<?php

class Login extends Controller {
    public function index (){
		$this->view('login/index');
	}

	public function cekLogin () {
		if( $this->model('DataHandle')->cekDataLogin($_POST) == 0) {
			$_SESSION["username"] = $data["username"];  
			header('Location: ' . BASEURL . '/dashboard/index'); 
		} else {
			header('Location: ' . BASEURL . '/login/index');
		}
	}
}