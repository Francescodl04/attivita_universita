<?php

class PianoStudi
{
    protected $conn;
    protected $table_name = "piano_di_studi";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getArchivePianoStudi()
    {
        $query = "SELECT * FROM $this->table_name";
        $stmt = $this->conn->query($query);
        return $stmt;
    }

    public function getArchivePianoStudiOnBreakpoints($start_value, $end_value)
    {
        $query = "SELECT * FROM $this->table_name WHERE codice BETWEEN $start_value AND $end_value";
        $stmt = $this->conn->query($query);
        return $stmt;
    }

    public function createPianoStudi($codice, $nome, $cfu, $settore, $n_settore, $TAF_ambito, $ore_lezione, $ore_laboratorio, $ore_tirocinio, $tipo_insegnamento, $semestre, $descrizione_semestre, $anno1, $anno2)
    {
        $query = "INSERT INTO $this->table_name 
        VALUES($codice, $nome, $cfu, $settore, $n_settore, $TAF_ambito, $ore_lezione, $ore_laboratorio, $ore_tirocinio, $tipo_insegnamento, $semestre, $descrizione_semestre, $anno1, $anno2) ";
        $stmt = $this->conn->query($query);
        return $stmt;
    }

    public function deletePianoStudi($codice)
    {
        $query = "DELETE FROM $this->table_name WHERE codice=$codice";
        $stmt = $this->conn->query($query);
        return $stmt;
    }

    public function updatePianoStudi($codice, $nome, $cfu, $settore, $n_settore, $TAF_ambito, $ore_lezione, $ore_laboratorio, $ore_tirocinio, $tipo_insegnamento, $semestre, $descrizione_semestre, $anno1, $anno2)
    {
        $query = "UPDATE $this->table_name 
        WHERE codice=$codice 
        SET nome=$nome, cfu=$cfu, settore=$settore, n_settore= $n_settore, TAF_ambito=$TAF_ambito, ore_lezione=$ore_lezione, ore_laboratorio=$ore_laboratorio, 
        ore_tirocinio=$ore_tirocinio, tipo_insegnamento= $tipo_insegnamento, semetre=$semestre, descrizione_semestre=$descrizione_semestre, anno1= $anno1, anno2=$anno2";
        $stmt = $this->conn->query($query);
        return $stmt;
    }

}

?>