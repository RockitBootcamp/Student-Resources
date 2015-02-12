<?php

class DB {

    private $db = NULL;
    private static $the_one = NULL;

    private function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=northwind;charset=utf8', 'root', '');
    }

    public static function getDB() {
        if(! self::$the_one) {
            self::$the_one = new DB();
        }
        return self::$the_one;
    }

    public function getByID($id, $table, $pk) {
        $q = 'select * from ' . $table . ' where ' . $pk . ' = :id';
        $stmt = $this->db->prepare($q);
        $stmt->execute(['id'=>$id]);
        $row = $stmt->fetch();
        return $row;
    }

    public function getAll($table) {
        $q = "select * from $table";
        $stmt = $this->db->prepare($q);
        $stmt->execute();
        $rows = $stmt->fetchAll();
        return $rows;
    }

}

