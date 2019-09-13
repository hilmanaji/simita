<?php

class Witel extends Controller{
    public function index(){
        $this->view('templates/header');
        $this->view('templates/sidebar');
        $this->view('witel/index');
        $this->view('templates/footer');

    }
}