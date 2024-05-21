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
      <h1 class="text-white">contact</h1>
    
    </div>
  
  </div>
  <?php
session_start();

// Fonction de génération du jeton CSRF
function generateCSRFToken() {
    $token = bin2hex(random_bytes(32));
    $_SESSION['csrf_token'] = $token;
    return $token;
}

// Générer le jeton CSRF
$csrf_token = generateCSRFToken();
?>
  <div class="d-flex justify-content-center">
  <section class="w-75">
    <h1 class="m-3 p-3">Envoyer un message :</h1>
    <form class="m-2 p-3" method="post" action="submit.php" autocomplete="off">
      <div class="form-group">
        <label for="email">Adresse email</label>
        <input type="email" class="form-control m-2" id="email" placeholder="" name="email" required>
      </div>
      <div class="form-group">
        <label for="titre">Titre</label>
        <input type="text" class="form-control m-2" id="titre" placeholder="Objet" name="subject" required>
      </div>
      <div class="form-group">
        <label for="description">Message</label>
        <textarea class="form-control m-2" id="description" rows="3" placeholder="Message" name="message" required></textarea>
      </div>
      <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
      <button type="submit" class="btn btn-primary m-2">Envoyer</button>
    </form>
  </section>
</div>

  <section class="text-center">
    <h1>Nous contacter</h1>
   
    <a href="tel:0631383831" onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'})">
      <i class="bi bi-telephone-fill"><p>Contact : 02 99 07 84 23</p></i>
    </a>
    
    <a href="mailto: arcadia@mail.com">
      <i class="bi bi-envelope"><p>Mail : arcadia@mail.com</p></i></a>

      <a href="https://www.google.fr/maps/place/La+for%C3%AAt+de+Broc%C3%A9liande/@48.018829,-2.2120714,14z/data=!4m10!1m2!2m1!1sforet+de+broceliande!3m6!1s0x480faceab3587495:0xcdc883e818be2eb2!8m2!3d48.018829!4d-2.1739626!15sChRmb3JldCBkZSBicm9jZWxpYW5kZVoWIhRmb3JldCBkZSBicm9jZWxpYW5kZZIBD25hdGlvbmFsX2ZvcmVzdOABAA!16s%2Fg%2F1vfp30mc?entry=ttu">
        <i class="bi bi-geo-alt-fill"><p>Adresse :<br>Forêt de Brocéliande
          35380 Paimpont</p></i>
    </a>
  </section>
  <section class="text-center mt-5">
    <h2>Nos horaires : </h2>
    <ul class="list-group list-group-flush">
    <?php
    $lundi_time = "8H - 18H";
    $mardi_time = "8H - 18H";
    $mercredi_time = "8H - 18H";
    $jeudi_time = "8H - 18H";
    $vendredi_time = "8H - 18H";
    $samedi_time = "fermé";
    $dimanche_time = "fermé"; ?>
      <li class="m-2 p-1">Lundi : <?php echo $lundi_time; ?></li>
      <li class="m-2 p-1">Mardi :<?php echo $mardi_time; ?> </li>
      <li class="m-2 p-1">Mercredi :<?php echo $mercredi_time; ?> </li>
      <li class="m-2 p-1">Jeudi :<?php echo $jeudi_time; ?> </li>
      <li class="m-2 p-1">Vendredi :<?php echo $vendredi_time; ?> </li>
      <li class="m-2 p-1">Samedi :<?php echo $samedi_time; ?> </li>
      <li class="m-2 p-1">Dimanche :<?php echo $dimanche_time; ?> </li>
    </ul>
   
  </section>

  <?php require "footer.php" ?>