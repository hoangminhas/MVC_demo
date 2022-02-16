<?php

namespace src\Model;

use PDO;

class BandModel
{
    public $konn;
    
    public function __construct()
    {
        $db = new DBConnect();
        $this->konn = $db->connectDb();
    }

    public function showList()
    {
        $sql = "select * from goat_rock_bands";
        $stmt = $this->konn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);

    }

    public function showById($id)
    {
        $sql = "select * from goat_rock_bands where id=$id";
        $stmt = $this->konn->query($sql);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function addNew($data)
    {
        $sql = "INSERT INTO goat_rock_bands(name, totalMember,bestRecord, bestAlbum, rank) VALUES (?,?,?,?,?)";
        $stmt = $this->konn->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['totalMember']);
        $stmt->bindParam(3, $data['bestRecord']);
        $stmt->bindParam(4, $data['bestAlbum']);
        $stmt->bindParam(5, $data['rank']);
        $stmt->execute();
    }

    public function deleteById($id)
    {
        $sql = "DELETE FROM goat_rock_bands WHERE id=$id";
        $this->konn->query($sql);
    }

    public function updateById($id, $data)
    {
//        var_dump($data);
//        die();
        $sql = "UPDATE goat_rock_bands SET name=?, totalMember=?, 
                    bestRecord=?, bestAlbum=?, rank=? WHERE id=?";
        $stmt=$this->konn->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['totalMember']);
        $stmt->bindParam(3, $data['bestRecord']);
        $stmt->bindParam(4, $data['bestAlbum']);
        $stmt->bindParam(5, $data['rank']);
        $stmt->bindParam(6, $id);
        $stmt->execute();
        header("location:index.php?page=band-list");
    }
}