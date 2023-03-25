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

    public function createPianoStudi($codice, $nome, $cfu, $settore, $n_settore, $TAF_ambito, $ore_lezione, $ore_laboratorio, $ore_tirocinio, $tipo_insegnamento, $semestre, $descrizione_semestre, $anno1, $anno2)
    {
        $query = "INSERT INTO $this->table_name 
        VALUES('$codice', '$nome', '$cfu', '$settore', '$n_settore', '$TAF_ambito', '$ore_lezione', '$ore_laboratorio', '$ore_tirocinio', '$tipo_insegnamento', '$semestre', '$descrizione_semestre', '$anno1', '$anno2') ";
        $stmt = $this->conn->query($query);
        return $stmt;
    }

    public function deletePianoStudi($codice)
    {
        $query = "DELETE FROM $this->table_name WHERE codice='$codice'";
        $stmt = $this->conn->query($query);
        return $stmt;
    }

    public function updatePianoStudi($codice, $nome, $cfu, $settore, $n_settore, $TAF_ambito, $ore_lezione, $ore_laboratorio, $ore_tirocinio, $tipo_insegnamento, $semestre, $descrizione_semestre, $anno1, $anno2)
    {
        $query = sprintf("UPDATE $this->table_name 
        SET nome='$nome', CFU='$cfu', settore='$settore', n_settore= '$n_settore', TAF_Ambito='%s', ore_lezione='$ore_lezione', ore_laboratorio='$ore_laboratorio', 
        ore_tirocinio='$ore_tirocinio', tipo_insegnamento = '$tipo_insegnamento', semestre='$semestre', descrizione_semestre='$descrizione_semestre', anno1= '$anno1', anno2='$anno2'
        WHERE codice='$codice' ", $this->conn->real_escape_string($TAF_ambito));
        $stmt = $this->conn->query($query);
        return $stmt;
    }

}

?>