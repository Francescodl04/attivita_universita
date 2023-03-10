<?php

class PianoStudi
{
    protected $conn;
    protected $table_name = "piano_studi";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getArchivePianoStudi()
    {
        $query = "SELECT * FROM $this->table_name";
        $stmt=$this->conn->query($query);
        return $stmt;
    }

    public function addPianoStudi($codice, $nome, $cfu, $settore, $n_settore, $TAF_ambito, $ore_lezione, $ore_laboratorio, $ore_tirocinio, $tipo_insegnamento, $semestre, $descrizione_semestre, $anno1, $anno2)
    {
        $query = "INSERT INTO $this->table_name VALUES($codice, $nome, $cfu, $settore, $n_settore, $TAF_ambito, $ore_lezione, $ore_laboratorio, $ore_tirocinio, $tipo_insegnamento, $semestre, $descrizione_semestre, $anno1, $anno2) ";
        $stmt=$this->conn->query($query);
        return $stmt;
    }

    public function deletePianoStudi($codice)
    {
        $query="DELETE FROM $this->table_name WHERE codice=$codice";
        $stmt=$this->conn->query($query);
        return $stmt;
    }

}

?>