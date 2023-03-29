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

?>

<div class="container-fluid">
    <div class="row pt-3 px-5">
        <form class="d-flex justify-content-right" role="search">
            <input class="form-control me-2" type="search" placeholder="Cerca fra le attività..." aria-label="Cerca...">
            <button class="btn btn-outline-success" type="submit">Cerca</button>
        </form>
        <p>
            Verranno visualizzati 10 elementi per pagina.
        </p>
    </div>
    <?php
    if (isset($_SESSION['delete'])):
        $text = "";
        $alert_type = "";
        switch ($_SESSION['delete']) {
            case 'Done':
                $text = "Eliminazione effettuata con successo!";
                $alert_type = "success";
                break;
            case 'Error':
                $text = "Si è verificato un errore nell'eliminazione...";
                $alert_type = "danger";
                break;
        }
        unset($_SESSION['delete']);
        ?>
        <div class="row mx-4 my-1 alert alert-dismissible alert-<?php echo $alert_type; ?>" role="alert">
            <?php echo $text; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="table-responsive-xxl p-5">
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
                        <th scope="col">
                            </td>
                        <th scope="col">
                            </td>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0 + $page_elements * ($n_pagination - 1); $i < $page_elements * $n_pagination && $i < count($data); $i++): ?>
                        <tr>
                            <th scope="row">
                                <?php echo $data[$i]->codice ?> -
                                <?php echo $data[$i]->nome ?>
                            </th>
                            <td>
                                <?php echo $data[$i]->CFU; ?>
                            </td>
                            <td>
                                <?php echo $data[$i]->settore; ?>
                            <td>
                                <?php echo $data[$i]->TAF_Ambito; ?>
                            </td>
                            <td>
                                <?php echo $data[$i]->n_settore; ?>
                            </td>
                            <td>
                                <?php echo $data[$i]->ore_lezione; ?>
                            </td>
                            <td>
                                <?php echo $data[$i]->ore_laboratorio; ?>
                            </td>
                            <td>
                                <?php echo $data[$i]->ore_tirocinio; ?>
                            </td>
                            <td>
                                <?php echo $data[$i]->tipo_insegnamento; ?>
                            </td>
                            <td>
                                <?php echo $data[$i]->semestre; ?>
                            </td>
                            <td>
                                <?php echo $data[$i]->descrizione_semestre; ?>
                            </td>
                            <td>
                                <?php echo $data[$i]->anno1; ?>
                            </td>
                            <td>
                                <?php echo $data[$i]->anno2; ?>
                            </td>
                            <td>
                                <button id="deleteButton" class="btn btn-danger" type="submit" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal"
                                    onclick="deleteButtonHandler(<?php echo $data[$i]->codice; ?>);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path
                                            d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                    </svg>
                                </button>
                            </td>
                            <td>
                                <a class="btn btn-secondary" type="button"
                                    href="?page=modify_attivita_formativa&id=<?php echo $i; ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-gear" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                        <path
                                            d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <nav aria-label="table_pagination">
            <ul class="pagination d-flex justify-content-center flex-wrap">
                <?php
                $disabled;
                if ($n_pagination == 1) {
                    $disabled = "disabled";
                } else {
                    $disabled = "";
                }
                $previous_page = $n_pagination - 1; ?>
                <li class="page-item <?php echo $disabled; ?>"><a class="page-link"
                        href="?page=attivita_formative&n_pagination=<?php echo $previous_page; ?>">Precedente</a></li>
                <?php for ($i = 1; $i < $n_pages + 1; $i++):
                    if ($i == $n_pagination): ?>
                        <li class="page-item active"><a class="page-link"
                                href="?page=attivita_formative&n_pagination=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php else: ?>
                        <li class="page-item"><a class="page-link"
                                href="?page=attivita_formative&n_pagination=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php endif; endfor;
                $next_page = $n_pagination + 1;
                if ($n_pagination == $n_pages) {
                    $disabled = "disabled";
                } else {
                    $disabled = "";
                }
                ?>
                <li class="page-item <?php echo $disabled; ?>"><a class="page-link"
                        href="?page=attivita_formative&n_pagination=<?php echo $next_page; ?>">Successivo</a></li>
            </ul>
        </nav>
    </div>
</div>

<div class="modal" id="deleteModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title">Eliminazione attività formativa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Sei veramente sicuro di voler eliminare questa attività formativa?</p>
            </div>
            <div class="modal-footer">
                <form action="HANDLERS/delete_item.php" method="POST">
                    <button id="deletionConfirmButton" name="codice" type="submit" class="btn btn-secondary" value=""
                        onclick="deleteConfirmation();">Sì</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>

    var deleteCode;

    function deleteButtonHandler(deleteCode) {
        this.deleteCode = deleteCode;
    }

    function deleteConfirmation() {
        document.getElementById("deletionConfirmButton").value = this.deleteCode;
    }

</script>