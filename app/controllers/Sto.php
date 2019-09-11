<?php

class Sto extends Controller {
    
    public function index () {
        $data['judul'] = 'Teritori';
		$data['sub_judul'] = 'Daftar STO';
		$data['data_sto'] = $this->model('DataHandle')->getAll($table = 'tbl_sto');
		$this->view('templates/header', $data);
		$this->view('templates/sidebar');
		$this->view('sto/index', $data);
		$this->view('templates/footer');
    }

    public function hapus($id) {
		if( $this->model('DataHandle')->hapusData($id, $table = 'tbl_sto', $id_table = 'id_sto') > 0) {
			Flasher::setFlash('Berhasil','dihapus','selektorcss');
			header('Location: ' . BASEURL . '/sto/index');
			exit;
		} else {
			Flasher::setFlash('Gagal','ditambahkan','selektorcss');
			header('Location: ' . BASEURL . '/sto/index');
			exit;
		}
	}

    
}