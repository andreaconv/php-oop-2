<?php

include 'models/Food.php';
include 'models/Accessory.php';

//aggiungo un prodotto di tipo CIBO
$croccantini = new Food('Royal Canin');
//setCategory() è un metodo dei PRODOTTI
$croccantini->setCategory('Cani');
//setWeight() è un metodo del CIBO
$croccantini->setWeight('545');
$croccantini->setIngredients('Prosciutto, Riso');

//aggiungp un prodotto di tipo ACCESSORIO
$voliera = new Accessory('Voliera Wilma');
$voliera->setCategory('Uccelli');
$voliera->setMaterial('Legno');
$voliera->setSize('M: L 83 x P 67 x H153 cm');

var_dump($croccantini);
var_dump($voliera);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Pet Shop</title>
</head>
<body>

  <div class="container py-5">

    <h1>shop</h1>

  </div>
</body>
</html>