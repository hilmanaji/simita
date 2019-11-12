<?php

class DataHandle {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    //General Query
    public function getAll($table) {
        $this->db->query('SELECT * FROM ' . $table);
        return $this->db->resultSet();
    }
    
    public function getAllById($table, $id_table, $id) {
        $this->db->query('SELECT * FROM ' . $table . ' WHERE ' . $id_table . '= :id');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function getAllWhere ($table, $id_table, $id) {
        $this->db->query('SELECT * FROM ' . $table . ' WHERE ' . $id_table . '= :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    
    public function hapusData($id, $table, $id_table){
        $query = "DELETE FROM $table  WHERE $id_table = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cekDataLogin($data){
        $query = "SELECT * FROM tbl_user WHERE username = :username AND pass = :pass";

        $this->db->query($query);
        $this->db->bind('username', $data['username']);
		$this->db->bind('pass', $data['pass']);

        $this->db->execute();

        return $this->db->rowCount();               
    }

    public function getDataLogin($data){
        $this->db->query('SELECT * FROM tbl_user WHERE username = :username AND pass = :pass');
        $this->db->bind('username', $data['username']);
		$this->db->bind('pass', $data['pass']);
        
        return $this->db->single(); 
    }



    // End General Query

    // Spesifik Query Regional
    public function tambahDataRegional($data){
        $query = "INSERT INTO tbl_regional VALUES ('', :regional)";

        $this->db->query($query);
        $this->db->bind('regional', $data['regional']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataRegional($data) {
        $query = "UPDATE tbl_regional SET regional = :regional WHERE id_regional = :id_regional";
        
        $this->db->query($query);
        $this->db->bind('id_regional', $data['id_regional']);
        $this->db->bind('regional', $data['regional']);
        
        $this->db->execute();

        return $this->db->rowCount(); 
    }

    // Spesifik Query Witel
    public function tambahDatawitel($data){
        $query = "INSERT INTO tbl_witel VALUES ('', :id_regional, :witel)";

        $this->db->query($query);
        $this->db->bind('id_regional', $data['id_regional']);
        $this->db->bind('witel', $data['witel']);


        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataWitel($data) {
        $query = "UPDATE tbl_witel SET id_regional = :id_regional, witel = :witel WHERE id_witel = :id_witel";
        
        $this->db->query($query);
        $this->db->bind('id_witel', $data['id_witel']);
        $this->db->bind('id_regional', $data['id_regional']);
        $this->db->bind('witel', $data['witel']);
        
        $this->db->execute();

        return $this->db->rowCount(); 
    }

    // Spesifik Query Datel
    public function tambahDataDatel($data) {
        $query = "INSERT INTO tbl_datel VALUES ('', :id_witel, :datel)";

        $this->db->query($query);
        $this->db->bind('id_witel', $data['id_witel']);
        $this->db->bind('datel', $data['datel']);


        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataDatel($data) {
        $query = "UPDATE tbl_datel SET id_witel = :id_witel, datel = :datel WHERE id_datel = :id_datel";
        
        $this->db->query($query);
        $this->db->bind('id_datel', $data['id_datel']);
        $this->db->bind('id_witel', $data['id_witel']);
        $this->db->bind('datel', $data['datel']);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    // Spesifik Query STO
    public function tambahDataSto($data) {
        $query = "INSERT INTO tbl_sto VALUES ('', :id_datel, :kode_sto, :nama_sto)";

        $this->db->query($query);
        $this->db->bind('id_datel', $data['id_datel']);
        $this->db->bind('kode_sto', $data['kode_sto']);
        $this->db->bind('nama_sto', $data['nama_sto']);


        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataSto() {
        $query = "UPDATE tbl_sto SET id_datel = :id_datel, kode_sto = :kode_sto, nama_sto = :nama_sto WHERE id_sto = :id_sto";
        
        $this->db->query($query);
        $this->db->bind('id_sto', $data['id_sto']);
        $this->db->bind('id_datel', $data['id_datel']);
        $this->db->bind('kode_sto', $data['kode_sto']);
        $this->db->bind('nama_sto', $data['nama_sto']);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    // Spesifik Query Kontrak
    public function tambahDataKontrak($data) {
        $query = "INSERT INTO tbl_no_kontrak VALUES ('', :no_kontrak, :jenis_kontrak)";

        $this->db->query($query);
        $this->db->bind('no_kontrak', $data['no_kontrak']);
        $this->db->bind('jenis_kontrak', $data['jenis_kontrak']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataKontrak($data) {
        $query = "UPDATE tbl_no_kontrak SET no_kontrak = :no_kontrak, jenis_kontrak = :jenis_kontrak WHERE id_kontrak = :id_kontrak";
        
        $this->db->query($query);
        $this->db->bind('id_kontrak', $data['id_kontrak']);
        $this->db->bind('no_kontrak', $data['no_kontrak']);
        $this->db->bind('jenis_kontrak', $data['jenis_kontrak']);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    // Spesifik Query PurchaseOrder
    public function tambahDataPo($data) {
        $query = "INSERT INTO tbl_po VALUES ('', :no_po, :jenis_po, :tgl_mulai, :tgl_selesai, :nilai_material, :nilai_jasa, :total, :status_po)";

        $this->db->query($query);
        $this->db->bind('no_po', $data['no_po']);
        $this->db->bind('jenis_po', $data['jenis_po']);
        $this->db->bind('tgl_mulai', $data['tgl_mulai']);
        $this->db->bind('tgl_selesai', $data['tgl_selesai']);
        $this->db->bind('nilai_material', $data['nilai_material']);
        $this->db->bind('nilai_jasa', $data['nilai_jasa']);
        $this->db->bind('total', $data['total']);
        $this->db->bind('status_po', $data['status_po']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataPo($data) {
        $query = "UPDATE tbl_po SET no_po = :no_po, jenis_po = :jenis_po, tgl_mulai = :tgl_mulai, tgl_selesai = :tgl_selesai, nilai_material = :nilai_material, nilai_jasa = :nilai_jasa, total = :total, status_po = :status_po WHERE id_po = :id_po";

        $this->db->query($query);
        $this->db->bind('id_po', $data['id_po']);
        $this->db->bind('no_po', $data['no_po']);
        $this->db->bind('jenis_po', $data['jenis_po']);
        $this->db->bind('tgl_mulai', $data['tgl_mulai']);
        $this->db->bind('tgl_selesai', $data['tgl_selesai']);
        $this->db->bind('nilai_material', $data['nilai_material']);
        $this->db->bind('nilai_jasa', $data['nilai_jasa']);
        $this->db->bind('total', $data['total']);
        $this->db->bind('status_po', $data['status_po']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // Spesifik Query Project
    public function tambahDataProject($data) {
        $query = "INSERT INTO tbl_lop VALUES (:id_project, :no_po, :id_regional, :id_witel, :id_datel, :id_sto, :nama_lokasi, :jumlah_odp, :jumlah_port, :toc, :nilai_material, :nilai_jasa, :total, :id_mitra, :status_progress)";

        $this->db->query($query);
        $this->db->bind('no_po', $data['no_po']);
        $this->db->bind('id_regional', $data['id_regional']);
        $this->db->bind('id_witel', $data['id_witel']);
        $this->db->bind('id_datel', $data['id_datel']);
        $this->db->bind('id_sto', $data['id_sto']);
        $this->db->bind('jumlah_odp', $data['jumlah_odp']);
        $this->db->bind('jumlah_port', $data['jumlah_port']);
        $this->db->bind('toc', $data['toc']);
        $this->db->bind('nilai_material', $data['nilai_material']);
        $this->db->bind('nilai_jasa', $data['nilai_jasa']);
        $this->db->bind('total', $data['total']);
        $this->db->bind('id_mitra', $data['id_mitra']);
        $this->db->bind('status_progress', $data['status_progress']);

        $this->db->execute();

        return $this->db->rowCount(); 
    }

    public function ubahDataProject($data) {
        $query = "UPDATE tbl_po SET no_po = :no_po, id_regional = :id_regional, id_witel = :id_witel, id_datel = :id_datel, id_sto = :id_sto, nama_lokasi = :nama_lokasi, jumlah_odp = :jumlah_odp, jumlah_port = :jumlah_port, toc = :toc, nilai_material = :nilai_material, nilai_jasa = :nilai_jasa, total = :total, id_mitra = :id_mitra, status_progress = :status_progress WHERE id_project = :id_project";

        $this->db->query($query);
        $this->db->bind('id_project', $data['id_project']);
        $this->db->bind('no_po', $data['no_po']);
        $this->db->bind('id_regional', $data['id_regional']);
        $this->db->bind('id_witel', $data['id_witel']);
        $this->db->bind('id_datel', $data['id_datel']);
        $this->db->bind('id_sto', $data['id_sto']);
        $this->db->bind('jumlah_odp', $data['jumlah_odp']);
        $this->db->bind('jumlah_port', $data['jumlah_port']);
        $this->db->bind('toc', $data['toc']);
        $this->db->bind('nilai_material', $data['nilai_material']);
        $this->db->bind('nilai_jasa', $data['nilai_jasa']);
        $this->db->bind('total', $data['total']);
        $this->db->bind('id_mitra', $data['id_mitra']);
        $this->db->bind('status_progress', $data['status_progress']);

        $this->db->execute();

        return $this->db->rowCount(); 
    }

    // Spesifik Query Mitra
    public function tambahDataMitra($data) {
        $query = "INSERT INTO tbl_mitra VALUES ('', :nama_perusahaan, :alamat, :email, :telp, :nama_direktur, :no_hp)";

        $this->db->query($query);
        $this->db->bind('nama_perusahaan', $data['nama_perusahaan']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('telp', $data['telp']);
        $this->db->bind('nama_direktur', $data['nama_direktur']);
        $this->db->bind('no_hp', $data['no_hp']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataMitra($data) {
        $query = "UPDATE tbl_mitra SET nama_perusahaan = :nama_perusahaan, alamat = :alamat, alamat = :alamat, email = :email, telp = :telp, nama_direktur = :nama_direktur, no_hp = :no_hp WHERE id_mitra = :id_mitra";

        $this->db->query($query);

        $this->db->bind('id_mitra', $data['id_mitra']);
        $this->db->bind('nama_perusahaan', $data['nama_perusahaan']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('telp', $data['telp']);
        $this->db->bind('nama_direktur', $data['nama_direktur']);
        $this->db->bind('no_hp', $data['no_hp']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // Spesifik Query User
    public function tambahDataUser($data) {
        $query = "INSERT INTO tbl_user VALUES ('', :id_mitra, :nama, :jk, :username, :pass, :role_user, :no_hp, :email)";

        $this->db->query($query);
        $this->db->bind('id_mitra', $data['id_mitra']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('pass', $data['pass']);
        $this->db->bind('role_user', $data['role_user']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('email', $data['email']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataUser($data) {
        $query = "UPDATE tbl_user SET id_mitra = :id_mitra, nama = :nama, jk = :jk, username = :username, pass = :pass, role_user = :role_user, no_hp = :no_hp, email = :email";
        
        $this->db->query($query);
        $this->db->bind('id_user', $data['id_user']);
        $this->db->bind('id_mitra', $data['id_mitra']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('pass', $data['pass']);
        $this->db->bind('role_user', $data['role_user']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('email', $data['email']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // Spesifik Query Status PO
    public function tambahStatusPO () {

    }

    public function ubahStatusPO () {

    }

    // Spesifik Query Status Project
    public function tambahStatusProject () {

    }

    public function ubahStatusProject () {
        
    }



    

}