<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Attività didattiche</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <table class="table ">
                <thead>
                    <tr>
                        <th scope="col">Attività formativa con codice</th>
                        <th scope="col">CFU</th>
                        <th scope="col">Settore</th>
                        <th scope="col">TAF ambito</th>
                        <th scope="col">Ore lezione</th>
                        <th scope="col">Ore laboratorio</th>
                        <th scope="col">Ore tirocinio</th>
                        <th scope="col">Tipo insegnamento</th>
                        <th scope="col">Semestre</th>
                        <th scope="col">Descrizione sementre</th>
                        <th scope="col">Anno 1</th>
                        <th scope="col">Anno 2</th>

                    </tr>
                </thead>
                <tbody>
                    <?php

                    $response = file_get_contents("http://localhost/attivita_universita/API/piano_studi/getArchivePianoStudi.php");
                    $data = json_decode($response);
                    for($i=0; $i<count($data); $i++) {
                        print("<tr>
                        <th scope=\"row\">{$data[$i]->codice} - {$data[$i]->nome}</th>
                        <td>{$data[$i]->CFU}</td>
                        <td>{$data[$i]->settore}</td>
                        <td>{$data[$i]->n_settore}</td>
                        <td>{$data[$i]->TAF_Ambito}</td>
                        <td>{$data[$i]->ore_lezione}</td>
                        <td>{$data[$i]->ore_laboratorio}</td>
                        <td>{$data[$i]->ore_tirocinio}</td>
                        <td>{$data[$i]->tipo_insegnamento}</td>
                        <td>{$data[$i]->semestre}</td>
                        <td>{$data[$i]->descrizione_semestre}</td>
                        <td>{$data[$i]->anno1}</td>
                        <td>{$data[$i]->anno2}</td>
                        </tr>"
                        );
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>