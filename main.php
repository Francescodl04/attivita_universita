<?php

session_start();

$_SESSION['modify'];

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'homepage':
            include('VIEWS/homepage.php');
            break;
        case 'login':
            include_once('VIEWS/login.php');
            break;
        case 'piani_studio':
            require __DIR__ . '/VIEWS/piani_studio.php';
            break;
        case 'new_item':
            require __DIR__ . '/VIEWS/new_item.php';
            break;
        case 'modify_item':
            require __DIR__ . '/VIEWS/modify_item.php';
            break;
        default:
            include(__DIR__ . "/VIEWS/content-404.php");
            break;
    }
} else {
    include('VIEWS/homepage.php');
}
?>