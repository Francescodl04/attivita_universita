<?php

$new_data = array(
    "codice" => $_POST['codice'],
    "nome" => $_POST['nome'],
    "CFU" => $_POST['CFU'],
    "settore" => $_POST['settore'],
    "n_settore" => $_POST['n_settore'],
    "TAF_Ambito" => $_POST['TAF_Ambito'],
    "ore_lezione" => $_POST['ore_lezione'],
    "ore_laboratorio" => $_POST['ore_laboratorio'],
    "ore_tirocinio" => $_POST['ore_tirocinio'],
    "tipo_insegnamento" => $_POST['tipo_insegnamento'],
    "semestre" => $_POST['semestre'],
    "descrizione_semestre" => $_POST['descrizione_semestre'],
    "anno1" => $_POST['anno1'],
    "anno2" => $_POST['anno2']
);

$json = json_encode($new_data);

$url = "http://localhost/attivita_universita/API/piano_studi/updatePianoStudi.php";

$ch = curl_init($url);


curl_setopt_array(
    $ch,
    array(
        CURLOPT_URL => $url,
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
        ),
        CURLOPT_POSTFIELDS => $json,
    )
);

$result = curl_exec($ch);

curl_close($ch);

session_start();

$_SESSION['modify'] = json_decode($result)->Update;

header('Location: ' . $_SERVER['HTTP_REFERER']);

?>