<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./scss/main.css">
    <title>Document</title>
  
</head>
<body>
  <?php require "header.php" ?>

<div class="hero-scene text-center">
    <div class="hero-scene-content">
      <h1 class="text-white">Galerie</h1>
    
    </div>
  
  </div>
  <div class="container">
    <div class="text-center">
        <button class="btn btn-primary">Ajouter une photo</button>
    </div>
    <div class="row row-cols-2 row-cols-lg-3 mt-5 g-5">
        <div class="col">
            <div class="image-card text-white">
                <img src="../image/animal/giraffe-215901_1280.jpg" alt="giraffe" class="rounded w-100">
                <p class="titre-image">Titre</p>
                <div class="action-image-buttons">
                    <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#EditionPhotoModal"><i class="bi bi-pencil-square"></i></button>
                    <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#DeletePhotoModal"><i class="bi bi-trash"></i></button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="image-card text-white">
                <img src="../image/animal/giraffe-215901_1280.jpg" alt="giraffe" class="rounded w-100">
                <p class="titre-image">Titre</p>
            </div>
        </div>
        <div class="col">
            <div class="image-card text-white">
                <img src="../image/animal/giraffe-215901_1280.jpg" alt="giraffe" class="rounded w-100">
                <p class="titre-image">Titre</p>
            </div>
        </div>
        <div class="col">
            <div class="image-card text-white">
                <img src="../image/animal/giraffe-215901_1280.jpg" alt="giraffe" class="rounded w-100">
                <p class="titre-image">Titre</p>
            </div>
        </div>
        <div class="col">
            <div class="image-card text-white">
                <img src="../image/animal/giraffe-215901_1280.jpg" alt="giraffe" class="rounded w-100">
                <p class="titre-image">Titre</p>
            </div>
        </div>
        <div class="col">
            <div class="image-card text-white">
                <img src="../image/animal/giraffe-215901_1280.jpg" alt="giraffe" class="rounded w-100">
                <p class="titre-image">Titre</p>
            </div>
        </div>
    </div>
    <div class="text-center"><a href="" class="btn btn-primary">réserver</a></div>
    

  </div>

  <!-- Modal edition -->
<div class="modal fade" id="EditionPhotoModal" tabindex="-1" aria-labelledby="EditionPhotoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-5" id="EditionPhotoModalLabel">Edition Photo</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="mb-3">
                  <label for="NamePhotoInput" class="form-label">Titre</label>
                  <input type="text" class="form-control" id="NamePhotoInput" placeholder="Lasagnes à la bolognese" name="Titre"> 
                </div>
                <div class="mb-3">
                  <label for="ImageInput" class="form-label">Image</label>
                  <input type="file" class="form-control" id="ImageInput"  name="Image">
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
    <!-- Modal supression -->
<div class="modal fade" id="DeletePhotoModal" tabindex="-1" aria-labelledby="DeletePhotoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-5" id="DeletePhotoModalLabel">Êtes-vous sûr de vouloir supprimer cette photo ?</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <div class="mb-3">
                 <p>Titre</p>
                 <img src="../image/animal/giraffe-215901_1280.jpg" alt="giraffe" class="rounded w-100">
                </div>
               
                <div class="text-center">
                    <button type="button" class="btn btn-danger">Supprimer</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>

  <?php require "footer.php" ?>