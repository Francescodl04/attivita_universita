<?php

$new_data = array(
    "codice" => $_POST['codice']
);

$json = json_encode($new_data);

$url = "http://localhost/attivita_universita/API/piano_studi/deletePianoStudi.php";

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

$_SESSION['delete'] = json_decode($result)->Delete;

header('Location: ' . $_SERVER['HTTP_REFERER']);


?>