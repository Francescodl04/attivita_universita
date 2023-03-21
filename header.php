<?php
?>


<nav class="navbar navbar-expand-md header_unisist" data-bs-theme="light">
  <div class="container-fluid">
    <a class="navbar-brand" href="?page=homepage">UniSist</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="?page=homepage">Home</a>
        </li>
        <?php
        if(true)
        {
          print("<li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" href=\"\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
            Piani di studio
          </a>
          <ul class=\"dropdown-menu\">
            <li><a class=\"dropdown-item\" href=\"?page=piani_studio\">Visualizza e modifica</a></li>
            <li><a class=\"dropdown-item\" href=\"?page=new_item\">Aggiungi</a></li>
          </ul>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"?page=piani_studio\">Attività formative</a>
        </li>
        <li>
          
        </li>");
        }
        
        ?>
    </div>
  </div>
</nav>