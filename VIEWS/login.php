<?php

?>
<div class="container-fluid ">
    <div class="row mx-5 my-2 p-5 ">
        <div class="col-3">

        </div>
        <div class="col-6">
            <h3>
                Login
            </h3>
            <p>
                Inserisci qui le tue credenziali per accedere a UniSist, il registro universitario...
            </p>
            <form action="API/utente/loginHandler.php" method="POST">
                <div class="mb-3">
                    <label for="usernameEmailField" class="form-label">Indirizzo e-mail</label>
                    <input type="email" name="email" class="form-control" id="usernameEmailField"
                        aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">Inserisci il tuo indirizzo email
                    </div>
                </div>
                <div class="mb-3">
                    <label for="passwordField" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="passwordField" required>
                </div>
                <input class="btn btn-primary" type="submit" value="Accedi">
            </form>
        </div>
        <div class="col-3">

        </div>
    </div>
</div>