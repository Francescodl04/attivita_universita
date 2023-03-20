<?php
$page = $_SERVER['REQUEST_URI'];


switch ($page) {
    case '/attivita_universita/UniSist/index.php' && '/attivita_universita/UniSist/index.php/':
        require __DIR__ . '/views/login.php';
        break;
    case '/attivita_universita/UniSist/edit':
        require __DIR__ . '/views/edit_attività.php';
        break;
    default:
        include("content-404.php");
        break;
}
?>