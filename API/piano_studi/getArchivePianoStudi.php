<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json; charset=UTF-8");

include_once dirname(__FILE__) . '/../../CONNECT/connect.php';
include_once dirname(__FILE__) . '/../../MODEL/piano_studi.php';

$database = new Database();
$db_connection = $database->connect();

$_piano_studi = new PianoStudi($db_connection);
$stmt;

if (isset($_GET['start_value']) && isset($_GET['end_value'])) {
    $start_value = $_GET['start_value'];
    $end_value = $_GET['end_value'];
    $stmt = $_piano_studi->getArchivePianoStudiOnBreakpoints($start_value, $end_value);
} else {
    $stmt = $_piano_studi->getArchivePianoStudi();
}

if ($stmt->num_rows > 0) {
    $_array = array();
    while ($record = mysqli_fetch_assoc($stmt)) // Trasforma una riga in un array e lo fa per tutte le righe di un record.
    {
        $_array[] = $record;
    }
    $json = json_encode($_array);
    echo $json;
    return $json;
} else {
    echo "No record";
    http_response_code(204);
}
?>