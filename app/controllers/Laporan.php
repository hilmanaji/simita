<?php
class Laporan extends Controller {
    public function index() {
        $data['judul'] = 'Laporan';
		$data['sub_judul'] = 'Cetak Laporan';
        
        
		$this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('laporan/index', $data);
		$this->view('templates/footer');
    }
}