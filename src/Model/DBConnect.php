<?php
namespace src\Model;

use PDO;
use PDOException;

class DBConnect
{
    public $dns;
    public $username;
    public $password;

    public function __construct()
    {
        $this->dns = 'mysql:host=localhost;dbname=mvc_demo;charset=utf8';
        $this->username = 'root';
        $this->password = 'root';
    }

    public function connectDb()
    {
        try {
            $connect = new PDO($this->dns, $this->username, $this->password);
            return $connect;
        }
        catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}