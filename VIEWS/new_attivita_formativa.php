<div class="container-fluid my-3">
    <div class="row mx-3">
        <h3>
            Inserisci una nuova attività formativa
        </h3>
        <p>
            Inserisci i campi all'interno delle apposite caselle e premi conferma
        </p>
    </div>
    <?php
    if (isset($_SESSION['creation'])) {
        $text = "";
        $alert_type = "";
        switch ($_SESSION['creation']) {
            case 'Done':
                $text = "Creazione effettuata con successo!";
                $alert_type = "success";
                break;
            case 'Error':
                $text = "Si è verificato un errore nella creazione...";
                $alert_type = "success";
                break;
        }
        print(
            "<div class=\"row mx-4 my-1 alert alert-dismissible alert-$alert_type \" role=\"alert\">
            $text
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>"
        );
        unset($_SESSION['creation']);
    }
    ?>
    <form action="HANDLERS/add_item.php" method="POST">
    <div class="row my-3 px-4">
        <div class="input-group py-2">
            <input name="codice" type="text" class="form-control" placeholder="Codice"  aria-label="Inserimento codice">
        </div>
        <div class="input-group py-2">
            <input name="nome" type="text" class="form-control" placeholder="Nome" aria-label="Inserimento nome">
        </div>
        <div class="input-group py-2">
            <input name="CFU" type="text" class="form-control" placeholder="CFU" aria-label="Inserimento CFU">
        </div>
        <div class="input-group py-2">
            <input name="settore" type="text" class="form-control" placeholder="Settore" aria-label="Inserimento nome settore">
        </div>
        <div class="input-group py-2">
            <input name="n_settore" type="text" class="form-control" placeholder="Numero di settore"
                aria-label="Inserimento numero di settore">
        </div>
        <div class="input-group py-2">
            <input name="TAF_Ambito" type="text" class="form-control" placeholder="TAF ambito" aria-label="Inserimento TAF ambito">
        </div>
        <div class="input-group py-2">
            <input name="ore_lezione" type="text" class="form-control" placeholder="Numero ore di lezione"
                aria-label="Inserimento ore di lezione">
        </div>
        <div class="input-group py-2">
            <input name="ore_laboratorio" type="text" class="form-control" placeholder="Numero ore di laboratorio"
                aria-label="Inserimento ore di laboratorio">
        </div>
        <div class="input-group py-2">
            <input name="ore_tirocinio" type="text" class="form-control" placeholder="Numero ore di tirocinio"
                aria-label="Inserimento ore di laboratorio">
        </div>
        <div class="input-group py-2">
            <input name="tipo_insegnamento" type="text" class="form-control" placeholder="Tipo di insegnamento"
                aria-label="Inserimento del tipo di insegnamento">
        </div>
        <div class="input-group py-2">
            <input name="semestre" type="text" class="form-control" placeholder="Semestre" aria-label="Inserimento del semestre">
        </div>
        <div class="input-group py-2">
            <input name="descrizione_semestre" type="text" class="form-control" placeholder="Descrizione del semestre"
                aria-label="Inserimento della descrizione del semestre">
        </div>
        <div class="input-group py-2">
            <input name="anno1" name="descrizione_semestre" type="text" class="form-control" placeholder="Anno 1" aria-label="Inserimento dell'anno 1">
        </div>
        <div class="input-group py-2">
            <input name="anno2" type="text" class="form-control" placeholder="Anno 2" aria-label="Inserimento dell'anno 2">
        </div>
    </div>
    <div class="row row my-3 px-4">
        <input class="btn btn-primary" type="submit" value="Invia e conferma">
    </div>
</form>
</div>
</div>