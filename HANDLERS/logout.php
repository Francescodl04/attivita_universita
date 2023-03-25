<?php

session_start();

session_destroy();

header('Location: http://localhost/attivita_universita/?page=homepage');

?>