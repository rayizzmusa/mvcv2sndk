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

    public function tambahDataMhs($data)
    {
        $query = "insert into mahasiswa values ('', :nama, :nim, :email, :jurusan)";

        $this->db->query($query);

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusMhs($id)
    {
        $query = "delete from mahasiswa where id=:id";

        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataMhs($data)
    {
        $query = "update mahasiswa set nama=:nama, nim=:nim, email=:email, jurusan=:jurusan where id=:id";

        $this->db->query($query);

        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
