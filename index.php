<?php

/**
 * Francesco Di Lena, classe 5F
 * Software di gestione di un registro universitario
 * File che viene aperto di default da parte del server che contiene il riferimento alle librerie di Bootstrap e 
 * JQuery e la struttura HTML di base
 **/

session_start();

?>

<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>UniSist - Il Registro Universitario</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row" id="header">
            <?php
            include("header.php");
            ?>
        </div>
        <div class="row" id="main">
            <?php
            include("main.php");
            ?>
        </div>
        <div class="row" id="footer">
            <?php
            include("footer.php");
            ?>
        </div>
    </div>
</body>

</html>