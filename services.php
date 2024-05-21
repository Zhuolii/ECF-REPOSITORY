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
      <h1 class="text-white">Services</h1>
    
    </div>
  
  </div>
<section>
    <article>
      <div class="container p-4 text-center mb-4">
        <?php $service_1 = "Restauration"; ?>
        <h2 class="p-4 "><?php echo $service_1;?></h2>
        <div class="row row-cols-12 row-cols-md-2 row-cols-lg-2">
          <div class="col text-center">
            <?php $service_1_text ="Découvrez une variété de restaurants au sein du Zoo, offrant une expérience culinaire diversifiée pour satisfaire tous les goûts. Que vous recherchiez une pause rapide ou un repas complet, nos restaurants sauront combler vos attentes.  </p>
";?>
            <p class="text-start p-3">
            <?php echo $service_1_text;?>
          </p>
          </div>
          <div class="col-12 col-md col-lg">
            <?php $service_1_img =" <img class=\"w-100\" src=\"../image/service/beer-garden-1682631_1280.jpg\" alt=\"terrace restaurant\" />"?>
           <?php echo $service_1_img; ?>
          </div>
         
        </div>
      </div>
    </article>
  </section>
  <section>
    <article>
      <div class="container p-4 text-center mb-4">
      <?php $service_2 = "Visite des habitats avec un guide :"; ?>
        <h2 class="p-4 heading_text"><?php echo $service_2;?></h2>
        <div class="row row-cols-12 row-cols-2-md row-cols-2-lg">
          <div class="col text-center">
          <?php $service_2_text ="Profitez d'une visite guidée gratuite pour explorer le Zoo et découvrir ses merveilles avec nos guides experts. Plongez dans un voyage captivant à travers nos habitats variés et apprenez-en davantage sur les animaux fascinants qui y résident.
      ";?>
            <p class="text-start p-3"><?php echo $service_2_text;?></p>
             </div>
          <div class="col-12 col-md col-lg">
          <?php $service_2_img =" <img class=\"w-100\" src=\"../image/service/tour-guide-6816049_1280.jpg\" alt=\"guide touristique\" />"?>
          <?php echo $service_2_img; ?>
            
          </div>
         
        </div>
      </div>
    </article>
  </section>
  <section>
    <article>
      <div class="container p-4 text-center mb-4">
      <?php $service_3 = "Visite du zoo en petit train :"; ?>
        <h2 class="p-4 heading_text"><?php echo $service_3;?></h2>
        <div class="row row-cols-12 row-cols-2-md row-cols-2-lg">
          <div class="col text-center">
          <?php $service_3_text =" Embarquez à bord de notre petit train pour une visite guidée du Zoo en toute commodité et confort. Laissez-vous transporter à travers les différents habitats et découvrez la diversité de la faune qui peuple notre parc.
           ";?>
            <p class="text-start p-3">
            <?php echo $service_3_text;?>
            </p>
             </div>
          <div class="col-12 col-md col-lg">
          <?php $service_3_img =" <img class=\"w-100\" src=\"../image/service/train-1131022_1280.jpg\" alt=\"petit train\" />"?>
          <?php echo $service_3_img; ?>
       
          </div>
         
        </div>
      </div>
    </article>
  </section>
  <?php require "footer.php" ?>