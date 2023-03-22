<?php

include_once dirname(__FILE__) . '/../../CONNECT/connect.php';
include_once dirname(__FILE__) . '/../../MODEL/utente.php';

$database = new Database();
$db_connection = $database->connect();


$email = $_POST['email'];
$password = $_POST['password'];

$utente = new Utente($db_connection);
$stmt=$utente->login($email, $password);



?>