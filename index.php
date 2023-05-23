<?php

$listProducts = [];

//prodotti di tipo ACCESSORIO
include_once 'Db/db-accessory.php';

//prodotti di tipo CIBO
include_once 'Db/db-food.php';

//prodotti di tipo GIOCATTOLO
include_once 'Db/db-toys.php';

// var_dump($listProducts);

?>

<?php include_once 'Views/layout/head.php' ?>

<!-- TODO: GESTIRE LE CARATTERISTICHE DEI PRODOTTI:
1. Quando la stringa proviene
  dagli ACCESSORI inserire materiale       e dimensioni
  dal   CIBO      inserire peso            e ingredienti 
  dai   GIOCHI    inserire caratteristiche e dimensioni
  inserire un testo alternativo (null oppure ND) se non trova nulla
2. Convertire il peso da grammi a kg se supera le 4 cifre -->

<!-- <body class=""> -->
<body class="bg-dark">

  <div class="container text-white my-5">

    <h1 class="text-center mb-3">BOOLSHOP</h1>

    <h3 class="mb-3">I nostri prodotti</h3>

    <div class="row">

      <?php foreach ($listProducts as $product) : ?>
        
        <div class="col">
          <div class="card mb-5" style="width: 18rem;">
            <img src="<?php echo $product->getImage() ?>" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title"><?php echo $product->getName() ?></h5>
              <p class="card-text"><?php echo $product->getCategory() ?></p>
              <p class="card-text">Prezzo: &euro; <?php echo $product->getPrice() ?></p>
              <p class="card-text">Primo valore</p>
              <p class="card-text">Secondo valore</p>
            </div>
          </div>
        </div>
        
      <?php endforeach ?>
      
    </div>
  </body>
  </html>

  
  <!-- <p class="card-text">
    <?php 
    echo $product->getMaterial() ??
    $product->getWeight() ??
    $product->getCharacteristics() ??
    null ?>
  </p> -->