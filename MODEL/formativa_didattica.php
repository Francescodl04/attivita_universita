<?php

class FormativaDidattica
{

    protected $conn;
    protected $table_name = "formativa_didattica";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getArchiveFormativaDidattica()
    {
        $query = "SELECT * FROM $this->table_name";
        $stmt = $this->conn->query($query);
        return $stmt;
    }

    public function addFormativaDidattica($formativa, $didattica)
    {
        $query = "INSERT INTO $this->table_name VALUES ($formativa, $didattica)";
        $stmt = $this->conn->query($query);
        return $stmt;
    }

    public function updateFormativaDidatticaOnFormativa($formativa, $didattica, $new_formativa)
    {
        $query = "UPDATE $this->table_name WHERE formativa=$formativa AND didattica=$didattica SET formativa=$new_formativa";
        $stmt = $this->conn->query($query);
        return $stmt;
    }

    public function updateFormativaDidatticaOnDidattica($formativa, $didattica, $new_didattica)
    {
        $query = "UPDATE $this->table_name WHERE formativa=$formativa AND didattica=$didattica SET formativa=$new_didattica";
        $stmt = $this->conn->query($query);
        return $stmt;
    }

    public function deleteFormativaDidattica($formativa, $didattica)
    {
        $query = "DELETE FROM $this->table_name WHERE formativa=$formativa AND didattica=$didattica";
        $stmt = $this->conn->query($query);
        return $stmt;
    }
}

?>