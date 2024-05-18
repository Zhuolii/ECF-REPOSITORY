<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./scss/main.css">
    <title>Document</title>
  
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand " href="/">Zoo d'Arcadia</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link " href="/">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/services">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/habitats">Habitats</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/galerie">Galerie</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                  </li>
                  <li class="nav-item" data-show="connected">
                    <a class="nav-link" href="/account">Mon compte</a>
                  </li>
                  <li class="nav-item" data-show="disconnected">
                    <a class="nav-link" href="/signin">Connexion</a>
                  </li>
                  <li class="nav-item" data-show="connected">
                   <button type="button" class="nav-link " id="signout-btn">Déconnexion</button>
                  </li>
                </ul>
                <!--formulaire de recherche à enlever ?
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                  -->
              </div>
            </div>
          </nav>
    </header>
    <main id="main-page">
        <!-- Le contenu de la page ici-->
        <?php
// Récupérer le chemin de la page demandée
$requested_page = $_SERVER['REQUEST_URI'];

// Vérifier si le fichier existe
if (file_exists("pages{$requested_page}.php")) {
    // Inclure le fichier de la page
    include "pages{$requested_page}.php";
} else {
    // Rediriger vers la page 404
    http_response_code(404);
    include "404.html";
}
?>
    </main>
    <footer class="bg-black text-white text-center footer">
      <div class="row">
        <div class="col" ></div>
     <div class="col"><img src="image/logo/logo-transparent-png.png" class="img-fluid" style="max-width:40%;" alt="Responsive image"></div>
     <div class="col" ></div>
     </div>
     <div class="row">
       <div class="col-sm-4 col-12 m-auto">
        <i class="bi bi-geo-alt-fill"><p>Adresse :<br>Forêt de Brocéliande
        35380 Paimpont</p></i>
     </div>
     <div  class="col-sm-4 col-12 m-auto">
      <i class="bi bi-telephone-fill">Contact : 02 99 07 84 23</i><br><i class="bi bi-envelope">Mail : arcadia@mail.com</i>
     </div>
     <div  class="col-sm-4 col-12 m-auto">
      <p>Horaires: <br> Du lundi au vendredi 
        De 8H à 18H</p>
     </div>
     </div>
    
    </footer>
  <!-- JS script.js -->
<script src="/js/script.js"></script>

<!-- Router/router.js (using module) -->
<script type="module" src="/Router/router.js"></script>

<!-- Bootstrap JavaScript -->
<script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>