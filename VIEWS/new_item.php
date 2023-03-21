<div class="container-fluid my-3">
    <div class="row mx-3">
        <h3>
            Inserisci una nuova attività formativa
        </h3>
        <p>
            Inserisci i campi all'interno delle apposite caselle e premi conferma
        </p>
    </div>
    <form action="HANDLERS/new_item.php" method="POST">
    <div class="row my-3 px-4">
        <div class="input-group py-2">
            <input type="text" class="form-control" placeholder="Codice" aria-label="Inserimento codice">
        </div>
        <div class="input-group py-2">
            <input type="text" class="form-control" placeholder="Nome" aria-label="Inserimento nome">
        </div>
        <div class="input-group py-2">
            <input type="text" class="form-control" placeholder="CFU" aria-label="Inserimento CFU">
        </div>
        <div class="input-group py-2">
            <input type="text" class="form-control" placeholder="Settore" aria-label="Inserimento nome settore">
        </div>
        <div class="input-group py-2">
            <input type="text" class="form-control" placeholder="Numero di settore"
                aria-label="Inserimento numero di settore">
        </div>
        <div class="input-group py-2">
            <input type="text" class="form-control" placeholder="TAF ambito" aria-label="Inserimento TAF ambito">
        </div>
        <div class="input-group py-2">
            <input type="text" class="form-control" placeholder="Numero ore di lezione"
                aria-label="Inserimento ore di lezione">
        </div>
        <div class="input-group py-2">
            <input type="text" class="form-control" placeholder="Numero ore di laboratorio"
                aria-label="Inserimento ore di laboratorio">
        </div>
        <div class="input-group py-2">
            <input type="text" class="form-control" placeholder="Numero ore di tirocinio"
                aria-label="Inserimento ore di laboratorio">
        </div>
        <div class="input-group py-2">
            <input type="text" class="form-control" placeholder="Tipo di insegnamento"
                aria-label="Inserimento del tipo di insegnamento">
        </div>
        <div class="input-group py-2">
            <input type="text" class="form-control" placeholder="Semestre" aria-label="Inserimento del semestre">
        </div>
        <div class="input-group py-2">
            <input type="text" class="form-control" placeholder="Descrizione del semestre"
                aria-label="Inserimento della descrizione del semestre">
        </div>
        <div class="input-group py-2">
            <input type="text" class="form-control" placeholder="Anno 1" aria-label="Inserimento dell'anno 1">
        </div>
        <div class="input-group py-2">
            <input type="text" class="form-control" placeholder="Anno 1" aria-label="Inserimento dell'anno 2">
        </div>
    </div>
    <div class="row row my-3 px-4">
        <input class="btn btn-primary" type="submit" value="Invia e conferma">
    </div>
</form>
</div>
</div>