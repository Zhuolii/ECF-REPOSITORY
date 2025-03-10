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
                    <a class="nav-link" href="/services.php">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/habitats.php">Habitats</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/galerie.php">Galerie</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/contact.php">Contact</a>
                  </li>
                  <li class="nav-item" data-show="connected">
                    <a class="nav-link" href="account.php">Mon compte</a>
                  </li>
                  <li class="nav-item" data-show="disconnected">
                    <a class="nav-link" href="signin.php">Connexion</a>
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