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
      <h1 class="">Connexion</h1>
    
    </div>
  
  </div>

  <div class="container">
    <form>
        <div class="mb-3">
          <label for="EmailInput" class="form-label">Email</label>
          <input type="email" class="form-control" id="EmailInput" placeholder="" name="Email"> 
          <div class="invalid-feedback">
            Le mail et le mot de passe ne correspondent pas
          </div>
        </div>
        <div class="mb-3">
          <label for="PasswordInput" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" id="PasswordInput" name="Password">
        </div>
        <div class="text-center">
            <button type="button" class="btn btn-primary" id="btnConnexion">Connexion</button>
        </div>
    </form>
    <!--
    <div class="text-center pt-3">
        <a href="/signup">Vous n’avez pas de compte ? Inscrivez-vous ici !</a>
    </div>
    -->
</div>

<?php require "footer.php" ?>