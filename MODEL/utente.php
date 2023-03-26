<?php

class Utente
{
    protected $conn;
    protected $table_name = "utente";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function login($email, $password)
    {
        $query = "SELECT email, `password` FROM $this->table_name WHERE email='$email' AND `password`='$password'";
        $stmt = $this->conn->query($query);
        if (mysqli_num_rows($stmt) == 0) {
            return false;
        }
        return $stmt;
    }
}

?>