<?php

class Service_model
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllServices()
    {
        $this->db->query("select * from services");
        return $this->db->resultSet();
    }

    public function tambahDataService($data)
    {
        $query = "insert into services values ('', :service, :keterangan)";

        $this->db->query($query);

        $this->db->bind('service', $data['service']);
        $this->db->bind('keterangan', $data['keterangan']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
