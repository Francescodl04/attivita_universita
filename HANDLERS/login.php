<?php

$credetials = array(
    "email" => $_POST['email'],
    "password" => $_POST['password']
);

$json = json_encode($credetials);

$url = "http://localhost/attivita_universita/API/utente/login.php";

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

switch (json_decode($result)->Login) {
    case "Done":
        $_SESSION['login'] = true;
        header('Location: http://localhost/attivita_universita/?page=reserved_area');
        break;
    case "Failed":
        $_SESSION['login'] = false;
        header('Location:' . $_SERVER['HTTP_REFERER']);
        break;
}


?>