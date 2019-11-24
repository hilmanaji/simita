<?php

class ProgresProject extends Controller {
    public function index () {
        $data['judul'] = 'Progres Project';
        $data['sub_judul'] = 'Update Perkembangan Project';
        if ($_SESSION["role_user"] == 'Admin Project') {
			$data['data_project'] = $this->model('DataHandle')->getProject();

		}else {
			$id_mitra = $_SESSION['id_mitra'];
			$data['data_project'] = $this->model('DataHandle')->getProjectById($id_mitra);
		}

        $this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('progres_project/index',$data);
		$this->view('templates/footer');
    }

    public function updateProject ($id) {
        $data['judul'] = 'Progres Project';
		$data['sub_judul'] = 'Update Perkembangan Project';
		$data['data_project'] = $this->model('DataHandle')->getProjectByIdp($id);
        $data['data_progres'] = $this->model('DataHandle')->getDataProgresById ($id);
        $data['data_status'] = $this->model('DataHandle')->getAll($table = 'tbl_status_project');


        $this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('progres_project/v_progres_project',$data);
		$this->view('templates/footer');
    }

    public function tambahProgres () {
		$id_kegiatan = $_POST['id_kegiatan'];
		$id_project = $_POST['id_project'];
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

				move_uploaded_file($file_tmp, 'file/'.$nama);

				$data = array(
					'id_kegiatan' => $id_kegiatan,
					'id_project' => $id_project,
					'tgl_mulai' => $tgl_mulai,
					'tgl_selesai' => $tgl_selesai,
					'keterangan' => $keterangan,
					'evidence' => $nama
				 );

				if ( $this->model('DataHandle')->tambahDataProgres($data) > 0) {
					Flasher::setFlash('Berhasil','ditambahkan','CssTambah');
					header('Location: ' . BASEURL . '/ProgresProject/index');
					 exit;
				} else {
					Flasher::setFlash('gagal','ditambahkan','CssTambah');
					header('Location: ' . BASEURL . '/ProgresProject/index');
					exit;
				}

					
			}
			else{
				echo 'UKURAN FILE TERLALU BESAR';
			}
		}
		else {
			echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
		}
		
	}

	public function ubahProgres ($id) {
        $data['judul'] = 'Progres Project';
		$data['sub_judul'] = 'Ubah Detail Progres';
		
        $data['data_progres'] = $this->model('DataHandle')->getDataProgresByIdp ($id);
        $data['data_status'] = $this->model('DataHandle')->getAll($table = 'tbl_status_project');


        $this->view('templates/header', $data);
		$this->view('templates/sidebar', $data);
		$this->view('progres_project/v_ubah_progres',$data);
		$this->view('templates/footer');
    }
	
	

}