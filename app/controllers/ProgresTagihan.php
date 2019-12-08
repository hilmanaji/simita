<?php

class ProgresTagihan extends Controller {
	public function __construct(){
		if(!isset($_SESSION["username"]))  {  
			header('Location: ' . BASEURL . '/login/index');  
		}
	}
	
    public function index () {
        $data['judul'] = 'Progres Tagihan';
        $data['sub_judul'] = 'Update Perkembangan Tagihan';
        if ($_SESSION["role_user"] == 'Admin Project') {
			$data['data_po'] = $this->model('DataHandle')->getAll($table='tbl_po');

		}else {
			$id_mitra = $_SESSION['id_mitra'];
			$data['data_po'] = $this->model('DataHandle')->getAllById($table ='tbl_po', $id_table = 'id_mitra', $id_mitra);
		}
		$id_mitra = $_SESSION['id_mitra'];
		//$data['jumlah_project'] = $this->model('DataHandle')->getCountRowById ($table = 'tbl_po', $kolom = 'no_po', $id = 'id_mitra', $kondisi = $id_mitra);

        $this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('progres_tagihan/index',$data);
		$this->view('templates/footer');
    }

    public function updateTagihan ($id) {
        $data['judul'] = 'Progres Tagihan';
		$data['sub_judul'] = 'Update Perkembangan Dokumen Tagihan';
		$data['data_po'] = $this->model('DataHandle')->getAllWhere ($table = 'tbl_po', $id_table = 'id_po', $id);
        $data['data_progres'] = $this->model('DataHandle')->getDataTagihanById ($id);
        $data['data_status'] = $this->model('DataHandle')->getAll($table = 'tbl_status_po');


        $this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('progres_tagihan/v_progres_tagihan',$data);
		$this->view('templates/footer');
    }

    public function tambahProgres () {
		
		$id_status_po = $_POST['id_status_po'];
		$id_po = $_POST['id_po'];
		$tgl_mulai = $_POST['tgl_mulai'];
		$tgl_selesai = $_POST['tgl_selesai'];
		$keterangan = $_POST['keterangan'];
		
		$ekstensi_benar	= array('pdf','jpg');
		$nama = $_FILES['evidence']['name'];
		$x = explode('.', $nama);
		$ekstensi = strtolower(end($x));
		$ukuran	= $_FILES['evidence']['size'];
		$file_tmp = $_FILES['evidence']['tmp_name'];
		if (in_array($ekstensi, $ekstensi_benar) === true){
			if ($ukuran < 1044070){
				$nama = md5($nama);
				move_uploaded_file($file_tmp, 'file/'.$nama);

				$data = array(
					'id_status_po' => $id_status_po,
					'id_po' => $id_po,
					'tgl_mulai' => $tgl_mulai,
					'tgl_selesai' => $tgl_selesai,
					'keterangan' => $keterangan,
					'evidence' => $nama
				 );

				if ( $this->model('DataHandle')->tambahDataProgresTagihan($data) > 0) {
					Flasher::setFlash('Berhasil','ditambahkan','CssTambah');
					header('Location: ' . BASEURL . '/ProgresTagihan/updateTagihan/'. $id_po .'');
					 exit;
				} else {
					Flasher::setFlash('gagal','ditambahkan','CssTambah');
					header('Location: ' . BASEURL . '/ProgresTagihan/updateTagihan/'. $id_po .'');
					exit;
				}

					
			}
			else{
				Flasher::setFlash('Ukuran File','Terlalu Besar','CssTambah');
				header('Location: ' . BASEURL . '/ProgresTagihan/updateTagihan/'. $id_po .'');
				exit;
			}
		}
		else {
			Flasher::setFlash('Format File','Tidak diijinkan','CssTambah');
			header('Location: ' . BASEURL . '/ProgresTagihan/updateTagihan/'. $id_po .'');
			exit;
		}
		
	}

	public function ubahProgres ($id) {
        $data['judul'] = 'Progres Tagihan';
		$data['sub_judul'] = 'Ubah Detail Progres';
		
        $data['data_progres'] = $this->model('DataHandle')->getDataProgresTagihanById ($id);
        $data['data_status'] = $this->model('DataHandle')->getAll($table = 'tbl_status_po');


        $this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('progres_tagihan/v_ubah_progres',$data);
		$this->view('templates/footer');
	}
	
	public function hapusProgres($id, $id_po) {
		if( $this->model('DataHandle')->hapusData($id, $table = 'tbl_progres_po', $id_table = 'id_progres') > 0) {
			Flasher::setFlash('Berhasil','dihapus','CssHapus');
			header('Location: ' . BASEURL . '/ProgresTagihan/updateTagihan/'. $id_po .'');
			exit;
		} else {
			Flasher::setFlash('Gagal','ditambahkan','CssHapus');
			header('Location: ' . BASEURL . '/ProgresTagihan/updateTagihan/'. $id_po .'');
			exit;
		}
	}

	public function updateProgres ($id_po) {
		$id_progres = $_POST['id_progres'];
		$id_status_po = $_POST['id_status_po'];
		$id_po = $_POST['id_po'];
		$tgl_mulai = $_POST['tgl_mulai'];
		$tgl_selesai = $_POST['tgl_selesai'];
		$keterangan = $_POST['keterangan'];
		
		$ekstensi_benar	= array('pdf','jpg');
		$nama = $_FILES['evidence']['name'];
		$x = explode('.', $nama);
		$ekstensi = strtolower(end($x));
		$ukuran	= $_FILES['evidence']['size'];
		$file_tmp = $_FILES['evidence']['tmp_name'];
		if (in_array($ekstensi, $ekstensi_benar) === true){
			if ($ukuran < 1044070){
				$nama = md5($nama);
				move_uploaded_file($file_tmp, 'files/'.$nama);

				$data = array(
					'id_progres' => $id_progres,
					'id_status_po' => $id_status_po,
					'id_po' => $id_po,
					'tgl_mulai' => $tgl_mulai,
					'tgl_selesai' => $tgl_selesai,
					'keterangan' => $keterangan,
					'evidence' => $nama
				 );
				 //var_dump($data);

				if ( $this->model('DataHandle')->ubahDataProgresPo($data) > 0) {
				 	Flasher::setFlash('Berhasil','Diperbaharui','CssTambah');
				 	header('Location: ' . BASEURL . '/ProgresTagihan/updateTagihan/'. $id_po .'');
					exit;
				} else {
				 	Flasher::setFlash('gagal','Diperbaharui','CssTambah');
				 	header('Location: ' . BASEURL . '/ProgresTagihan/updateTagihan/'. $id_po .'');
				 	exit;
				}

					
			}
			else{
				Flasher::setFlash('Ukuran File','Terlalu Besar','CssTambah');
				header('Location: ' . BASEURL . '/ProgresTagihan/updateTagihan/'. $id_po .'');
				exit;
			}
		}
		else {
			Flasher::setFlash('Format File','Tidak diijinkan','CssTambah');
			header('Location: ' . BASEURL . '/ProgresTagihan/updateTagihan/'. $id_po .'');
			exit;
		}
	}


}