<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");

include_once dirname(__FILE__) . '/../../CONNECT/connect.php';
include_once dirname(__FILE__) . '/../../MODEL/piano_studi.php';

$database = new Database();
$db_connection = $database->connect();

$data = json_decode(file_get_contents("php://input"));

if (!empty($data)) {
    $_piano_studi = new PianoStudi($db_connection);
    if ($_piano_studi->createPianoStudi($data->codice, $data->nome, $data->CFU, $data->settore, $data->n_settore, $data->TAF_Ambito, $data->ore_lezione, $data->ore_laboratorio, $data->ore_tirocinio, $data->tipo_insegnamento, $data->semestre, $data->descrizione_semestre, $data->anno1, $data->anno2) > 0) {
        http_response_code(201);
        echo json_encode(array("Creation" => "Done"));
    } else {
        http_response_code(503);
        echo json_encode(array("Creation" => "Error"));
    }
} else {
    http_response_code(400);
    die(json_encode(array("Creation" => "Bad request")));
}

?>