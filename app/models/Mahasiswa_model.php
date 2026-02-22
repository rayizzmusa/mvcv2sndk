<?php

class Mahasiswa_model
{
    // private $mhs = [
    //     [
    //         "nama" => "Syifa Nur Aulia",
    //         "nim" => "47234983",
    //         "email" => "syf@exc.com",
    //         "jurusan" => "Arab"
    //     ],

    //     [
    //         "nama" => "rayhan Muh",
    //         "nim" => "4734555",
    //         "email" => "ryn@exc.com",
    //         "jurusan" => "IT"
    //     ]
    // ]; //ini tanpa database

    // private $dbh;
    // private $stmt;

    // public function __construct()
    // {
    //     $dsn = 'mysql:host=localhost;dbname=phpmvcsadhika';

    //     try {
    //         $this->dbh = new PDO($dsn, 'root', '');
    //     } catch (PDOException $e) {
    //         die($e->getMessage());
    //     }
    // }

    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMhs()
    {
        // return $this->mhs;

        // $this->stmt = $this->dbh->prepare('select * from mahasiswa');
        // $this->stmt->execute();
        // return $this->stmt->fetchAll(PDO::FETCH_ASSOC); // sama kaya mysqli_fetch_assoc

        $this->db->query('select * from ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMhsById($id)
    {
        $this->db->query('select * from ' . $this->table . ' where id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
