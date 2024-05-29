<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./scss/main.css">
  <title>Document</title>
</head>
<body>
  <?php
  include 'database_utils.php';
  ?>
  <?php require "header.php" ?>
  <div class="hero-scene text-center">
    <div class="hero-scene-content">
    
      <h1 class="text-white">Habitats</h1>
    </div>
  </div>
  <article>
    <section class="text-center p-3 m-3">
      <?php ?>
      <h3 p-2 m-2><?php 
     
      $sql = "SELECT * FROM habitat" ;
      $column_name = 'nom';
      executeQueryAndFetchColumn($conn,$sql,$column_name);
      ?> </h3>
      <label>
        <img src="../image/animal/giraffe-215901_1280.jpg" alt="savane" class="w-25 ">
      
        <input type="checkbox" data-toggle="toggle" id="toggle-switch" style="display:none;">
      </label>
    </section>
    <section class="hidden_animal_image" id="hidden_animal_image">
      <div class="text-left d-flex justify-content-center m-4 p-3">
        <?php $description_habitat_1 = "Description : Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque non facilis necessitatibus aperiam magnam aliquam, sed deserunt minima dicta sint sapiente. Qui aliquam assumenda minus totam eos repudiandae nihil architecto."?>
        <p class="w-50"><?php echo $description_habitat_1 ?></p>
      </div>
      <!--section animal -->
      <div class="container-fluid row w-100 p-2">
        <div class="row m-3">
          <div class="text-center col-sm-12 col-md-6 col-lg-6">
            <?php $animal_image_1 = "<img src=\"../image/animal/giraffe-215901_1280.jpg\" alt=\"\" class=\"rounded w-75\">"?>
            <?php echo $animal_image_1 ?>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6">
            <section class="hidden_animal_detail" id="hidden_animal_detail">
              <div class="text-left d-flex justify-content-center animal_description p-2 m-2">
                <div class="w-75 container-fluid row">
                  <div class="col-6 text-center p-2 ">
                    <?php $animal_name =""?>
                    <p>Prénom</p>
                  </div>
                  <div class="col-6 text-center p-2 ">
                    <p>Race</p>
                  </div>
                  <div class="col-12 text-left d-flex justify-content-center p-2 m-2">
                    <p>habitat Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi, non. Debitis blanditiis nam suscipit obcaecati similique deleniti assumenda molestias itaque! Fugiat in corrupti modi repellat beatae doloremque aliquid dolorum animi.
                    </p>
                  </div>
                  <div class="col-12 text-left d-flex justify-content-center p-2 m-2">
                    <p>avis veterinaire</p>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
      <!--section animal -->
    </section>
  </article>
  <?php require "footer.php" ?>