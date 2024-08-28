<?php


class Connection
{
    public $conn;
    public function __construct()
    {
        $this->conn =  new PDO('mysql:host=localhost;dbname=profilepage','root', 'Pl0ns!976',
            [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
        );
    }

    public function query()
    {
        $stmt = $this->conn->prepare("SELECT * FROM users");
        $stmt->execute();
        return $stmt;
    }

}