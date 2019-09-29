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

    public function getAllWhere($table, $id_table, $id) {
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
        $query = "UPDATE tbl_witell SET id_regional = :id_regional, witel = :witel WHERE id_witel = :id_witel";
        
        $this->db->query($query);
        $this->db->bind('id_witel', $data['id_witel']);
        $this->db->bind('id_regional', $data['id_regional']);
        $this->db->bind('witel', $data['witel']);
        
        $this->db->execute();

        return $this->db->rowCount(); 
    }

    // Spesifik Query Datel
    public function tambahDataDatel() {

    }

    public function ubahDataDatel() {

    }

    // Spesifik Query STO
    public function tambahDataSto() {

    }

    public function ubahDataSto() {

    }

    // Spesifik Query Kontrak
    public function tambahDataKontrak() {

    }

    public function ubahDataKontrak() {

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

    public function ubahDataPo() {

    }

    // Spesifik Query Project
    public function tambahDataProject($data) {
        
    }

    public function ubahDataProject() {

    }



    

}