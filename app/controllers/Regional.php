<?php

class Regional extends Controller {
    public function index (){
        $data['judul'] = 'Regional';
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('regional/index');
		$this->view('templates/footer');
    }
}