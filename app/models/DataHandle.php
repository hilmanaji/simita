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

    public function ubahDatawitel($data) {
        $query = "UPDATE tbl_witell SET id_regional = :id_regional, witel = :witel WHERE id_witel = :id_witel";
        
        $this->db->query($query);
        $this->db->bind('id_witel', $data['id_witel']);
        $this->db->bind('id_regional', $data['id_regional']);
        $this->db->bind('witel', $data['witel']);
        
        $this->db->execute();

        return $this->db->rowCount(); 
    }

}