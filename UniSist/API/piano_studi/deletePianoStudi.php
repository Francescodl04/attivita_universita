<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json; charset=UTF-8");

include_once dirname(__FILE__) . '/../../Connect/connect.php';
include_once dirname(__FILE__) . '/../../Model/piano_studi.php';

$database = new Database();
$db_connection = $database->connect();

$_piano_studi = new PianoStudi($db_connection);
$data = json_decode(file_get_contents("php://input"));

if (!empty($data)) {
    $_piano_studi = new PianoStudi($db_connection);
    if ($_piano_studi->deletePianoStudi($data->codice) > 0) {
        http_response_code(201);
        echo json_encode(array("Update" => "Done"));
    } else {
        http_response_code(503);
        echo json_encode(array("Update" => 'Error'));
    }
} else {
    http_response_code(400);
    die(json_encode(array("Update" => "Bad request")));
}

?>