<?php

class Utente
{
    protected $conn;
    protected $table_name = "utente";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function login()
    {
        
    }
}

?>