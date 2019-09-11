<?php

class DataHandle {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAll($table) {
        $this->db->query('SELECT * FROM ' . $table);
        return $this->db->resultSet();
    }

    public function getAllWhere($table, $id) {
        $this->db->query('SELECT * FROM ' . $table . ' WHERE ' . $id . '= :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataRegional($data){
        $query = "INSERT INTO tbl_regional VALUES ('', :regional)";

        $this->db->query($query);
        $this->db->bind('regional', $data['regional']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusData($id, $table, $id_table){
        $query = "DELETE FROM $table  WHERE $id_table = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataRegional () {
        
    }
}