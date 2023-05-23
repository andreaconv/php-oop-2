<?php

include 'models/Product.php';

//passo un solo valore nelle parentesi perchè nella classe del prodotto il metodo __construct richiede un solo valore
$newProduct = new Product('nome prodotto');
$newProduct->setCategory('cani');

var_dump($newProduct);


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