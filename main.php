<?php

/**
 * Francesco Di Lena, classe 5F
 * Software di gestione di un registro universitario
 * Con questo file si gestisce il routing fra le varie pagine che compongono il software
 **/

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'homepage':
            include_once('VIEWS/homepage.php');
            break;
        case 'login':
            include_once('VIEWS/login.php');
            break;
        case 'reserved_area':
            include_once('VIEWS/reserved_area.php');
            break;
        case 'attivita_formative':
            include_once('VIEWS/attivita_formative.php');
            break;
        case 'new_attivita_formativa':
            include_once('VIEWS/new_attivita_formativa.php');
            break;
        case 'modify_attivita_formativa':
            include_once('VIEWS/modify_attivita_formativa.php');
            break;
        default:
            include_once( "VIEWS/content-404.php");
            break;
    }
} else {
    if (isset($_SESSION['login'])) {
        include_once("VIEWS/reserved_area.php");
    } else {
        include_once('VIEWS/homepage.php');
    }
}
?>