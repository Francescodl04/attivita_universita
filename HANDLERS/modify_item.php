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

$url="API/piano_studi/updatePianoStudi.php";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_PUT, $json);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($curl);

curl_close($curl);

echo $result;

?>