<?php

/**
 * Francesco Di Lena, classe 5F
 * Software di gestione di un registro universitario
 * Pagina per la modifica di un'attività formativa
 **/

$response = file_get_contents("http://localhost/attivita_universita/API/piano_studi/getArchivePianoStudi.php");
$data = json_decode($response);
$i = $_GET['id'];

?>

<div class="container-fluid my-3">
    <div class="row mx-3">
        <h3>
            Modifica un' attività formativa
        </h3>
        <p>
            Modifica i campi all'interno delle apposite caselle e premi conferma
        </p>
    </div>
    <?php
    if (isset($_SESSION['modify'])):
        $text = "";
        $alert_type = "";
        switch ($_SESSION['modify']) {
            case 'Done':
                $text = "Modifica effettuata con successo!";
                $alert_type = "success";
                break;
            case 'Error':
                $text = "Si è verificato un errore nella modifica...";
                $alert_type = "danger";
                break;
        }
        unset($_SESSION['modify']);
        ?>
        <div class="row mx-4 my-1 alert alert-dismissible alert-<?php echo $alert_type; ?>" role="alert">
            <?php echo $text; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <form action="HANDLERS/modify_item.php" method="POST">
        <div class="row my-3 px-4">
            <div class="input-group py-2">
                <input name="codice" type="text" class="form-control" placeholder="Codice"
                    value="<?php print($data[$i]->codice) ?>" aria-label="Inserimento codice" disabled>
            </div>
            <div class="input-group py-2">
                <input name="nome" type="text" class="form-control" placeholder="Nome"
                    value="<?php print($data[$i]->nome) ?>" aria-label="Inserimento nome" required>
            </div>
            <div class="input-group py-2">
                <input name="CFU" type="text" class="form-control" placeholder="CFU"
                    value="<?php print($data[$i]->CFU) ?>" aria-label="Inserimento CFU" required>
            </div>
            <div class="input-group py-2">
                <input name="settore" type="text" class="form-control" placeholder="Settore"
                    value="<?php print($data[$i]->settore) ?>" aria-label="Inserimento nome settore">
            </div>
            <div class="input-group py-2">
                <input name="n_settore" type="text" class="form-control" placeholder="Numero di settore"
                    value="<?php print($data[$i]->n_settore) ?>" aria-label="Inserimento numero di settore">
            </div>
            <div class="input-group py-2">
                <input name="TAF_Ambito" type="text" class="form-control" placeholder="TAF ambito"
                    value="<?php print($data[$i]->TAF_Ambito) ?>" aria-label="Inserimento TAF ambito">
            </div>
            <div class="input-group py-2">
                <input name="ore_lezione" type="text" class="form-control" placeholder="Numero ore di lezione"
                    value="<?php print($data[$i]->ore_lezione) ?>" aria-label="Inserimento ore di lezione">
            </div>
            <div class="input-group py-2">
                <input name="ore_laboratorio" type="text" class="form-control" placeholder="Numero ore di laboratorio"
                    value="<?php print($data[$i]->ore_laboratorio) ?>" aria-label="Inserimento ore di laboratorio">
            </div>
            <div class="input-group py-2">
                <input name="ore_tirocinio" type="text" class="form-control" placeholder="Numero ore di tirocinio"
                    value="<?php print($data[$i]->ore_tirocinio) ?>" aria-label="Inserimento ore di laboratorio">
            </div>
            <div class="input-group py-2">
                <input name="tipo_insegnamento" type="text" class="form-control" placeholder="Tipo di insegnamento"
                    value="<?php print($data[$i]->tipo_insegnamento) ?>"
                    aria-label="Inserimento del tipo di insegnamento" required>
            </div>
            <div class="input-group py-2">
                <input name="semestre" type="text" class="form-control" placeholder="Semestre"
                    value="<?php print($data[$i]->semestre) ?>" aria-label="Inserimento del semestre" required>
            </div>
            <div class="input-group py-2">
                <input name="descrizione_semestre" type="text" class="form-control"
                    placeholder="Descrizione del semestre" value="<?php print($data[$i]->descrizione_semestre) ?>"
                    aria-label="Inserimento della descrizione del semestre" required>
            </div>
            <div class="input-group py-2">
                <input name="anno1" type="text" class="form-control" placeholder="Anno 1"
                    value="<?php print($data[$i]->anno1) ?>" aria-label="Inserimento dell'anno 1">
            </div>
            <div class="input-group py-2">
                <input name="anno2" type="text" class="form-control" placeholder="Anno 2"
                    value="<?php print($data[$i]->anno2) ?>" aria-label="Inserimento dell'anno 2">
            </div>
        </div>
        <div class="row row my-3 px-4">
            <input class="btn btn-primary" type="submit" value="Invia e conferma">
        </div>
    </form>
</div>