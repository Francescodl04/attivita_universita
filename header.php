
<?php

/**
 * Francesco Di Lena, classe 5F
 * Software di gestione di un registro universitario
 * File che contiene la definizione della parte superiore di pagina (header)
 **/

?>

<nav class="navbar navbar-expand-md header_unisist" data-bs-theme="light">
  <div class="container-fluid">
    <?php
    if (isset($_SESSION['login']) == true && $_SESSION['login'] == true):
      ?>
      <a class="navbar-brand" href="?page=reserved_area">UniSist</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="?page=reserved_area">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Attività formative
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="?page=attivita_formative">Visualizza e modifica</a></li>
              <li><a class="dropdown-item" href="?page=new_attivita_formativa">Aggiungi</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Unità didattiche
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="?page=piani_studio">Visualizza e modifica</a></li>
              <li><a class="dropdown-item" href="?page=new_item">Aggiungi</a></li>
            </ul>
          <li class="nav-item">
            <a class="nav-link" href="?page=homepage">Piano di studio completo</a>
          </li>
        </ul>
        <a class=" btn btn-primary" href="HANDLERS/logout.php" role="button">Esci</a>
      </div>

    <?php else: ?>
      <a class="navbar-brand" href="?page=homepage">UniSist</a></ul>
      <a class="btn btn-primary" href="?page=login" role="button">Accedi alla tua area riservata</a>
    <?php endif; ?>
  </div>
</nav>