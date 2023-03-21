<?php

?>

<div class="container-fluid">
    <div class="row pt-3 px-5">
        <form class="d-flex justify-content-right" role="search">
            <input class="form-control me-2" type="search" placeholder="Cerca nel sito..." aria-label="Cerca...">
            <button class="btn btn-outline-success" type="submit">Cerca</button>
        </form>
    </div>
    <div class="row">
        <div class="table-responsive-xl p-5">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Attività formativa con codice</th>
                        <th scope="col">CFU</th>
                        <th scope="col">Settore</th>
                        <th scope="col">TAF ambito</th>
                        <th scope="col">Numero settore</th>
                        <th scope="col">Ore lezione</th>
                        <th scope="col">Ore laboratorio</th>
                        <th scope="col">Ore tirocinio</th>
                        <th scope="col">Tipo insegnamento</th>
                        <th scope="col">Semestre</th>
                        <th scope="col">Descrizione semestre</th>
                        <th scope="col">Anno 1</th>
                        <th scope="col">Anno 2</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $response = file_get_contents("http://localhost/attivita_universita/API/piano_studi/getArchivePianoStudi.php");
                    $data = json_decode($response);
                    $page_elements = 10;
                    $n_pages = ceil(count($data) / $page_elements); //Arrotonda all'unità
                    if (isset($_GET['n_pagination'])) {
                        $n_pagination = $_GET['n_pagination'];
                    } else {
                        $n_pagination = 1;
                    }
                    for ($i = 0 + $page_elements * ($n_pagination - 1); $i < $page_elements * $n_pagination && $i < count($data); $i++) {
                        print("<tr>
                        <th scope=\"row\">{$data[$i]->codice} - {$data[$i]->nome}</th>
                        <td>{$data[$i]->CFU}</td>
                        <td>{$data[$i]->settore}</td>
                        <td>{$data[$i]->TAF_Ambito}</td>
                        <td>{$data[$i]->n_settore}</td>
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
    <div class="row">
        <nav class="d-flex justify-content-center" aria-label="table_pagination">
            <ul class="pagination">
                <?php
                $disabled;
                if ($n_pagination == 1) {
                    $disabled = "disabled";
                } else {
                    $disabled = "";
                }
                $previous_page = $n_pagination - 1;
                print("<li class=\"page-item $disabled\"><a class=\"page-link\" href=\"?page=piani_studio&n_pagination=$previous_page\">Precedente</a></li>");
                for ($i = 1; $i < $n_pages + 1; $i++) {
                    if ($i == $n_pagination) {
                        print("<li class=\"page-item active\"><a class=\"page-link\" href=\"?page=piani_studio&n_pagination=$i\">$i</a></li>");
                    } else {
                        print("<li class=\"page-item\"><a class=\"page-link\" href=\"?page=piani_studio&n_pagination=$i\">$i</a></li>");
                    }
                }
                $next_page = $n_pagination + 1;
                if ($n_pagination == $n_pages) {
                    $disabled = "disabled";
                } else {
                    $disabled = "";
                }
                print("<li class=\"page-item $disabled\"><a class=\"page-link\" href=\"?page=piani_studio&n_pagination=$next_page\">Successivo</a></li>");
                ?>
            </ul>
        </nav>
    </div>
</div>