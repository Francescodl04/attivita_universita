<?php

class Database
{
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "medicina";
    private $port = "3306";

    public $conn;

    public function connect()
    {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database, $this->port);
        } catch (Exception $ex) {
            die("Error connecting to database $ex\n\n");
        }
        return $this->conn;
    }
}



?>