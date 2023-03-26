<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");

include_once dirname(__FILE__) . '/../../CONNECT/connect.php';
include_once dirname(__FILE__) . '/../../MODEL/utente.php';

$database = new Database();
$db_connection = $database->connect();

$data = json_decode(file_get_contents("php://input"));

if (!empty($data)) {
    $utente = new Utente($db_connection);
    $stmt = $utente->login($data->email, $data->password);
    if ($stmt) {
        http_response_code(201);
        echo json_encode(array("Login" => "Done"));
    } else {
        http_response_code(503);
        echo json_encode(array("Login" => 'Failed'));
    }

} else {
    http_response_code(400);
    die(json_encode(array("Login" => "Bad request")));
}

?>