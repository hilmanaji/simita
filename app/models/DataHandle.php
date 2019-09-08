<?php

class DataHandle {
    private $table_regional = 'tbl_regional';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAll($table) {
        $this->db->query('SELECT * FROM ' . $table);
        return $this->db->resultSet();
    }

    public function getAllWhere($table, $id_regional) {
        $this->db->query('SELECT * FROM ' . $table . ' WHERE id_regional=:id_regional');
        $this->db->bind('id_regional', $id_regional);
        return $this->db->single();
    }
}