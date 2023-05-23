<?php

require __DIR__ . '/../models/Food.php';

$croccantini = new Food('Natural Trainer');
$croccantini->setImage('https://www.rioparty.it/32668-large_default/cibo-per-cani-crocchette-con-agnello-e-cereali-integrali-natural-trainer.jpg');
//setCategory() è un metodo dei PRODOTTI
$croccantini->setCategory(['<i class="fa-solid fa-dog"></i>', 'Cane']);
$croccantini->setPrice(39);
//setWeight() è un metodo del CIBO
$croccantini->setWeight('Peso: 3kg');
$croccantini->setIngredients('Agnello, Cereali Integrali');
$listProducts[] = $croccantini;