<?php

session_start();

$page = $_GET['page'];


switch ($page) {
    case 'homepage':
        include_once('VIEWS/homepage.php');
        break;
    case 'login':
        include_once('VIEWS/login.php');
        break;
    case 'piani_studio':
        require __DIR__ . '/VIEWS/piani_studio.php';
        break;
    default:
        include(__DIR__ . "/VIEWS/content-404.php");
        break;
}
?>