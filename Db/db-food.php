<?php

require __DIR__ . '/../models/Food.php';

$croccantini = new Food('Natural Trainer');
$croccantini->setImage('https://www.rioparty.it/32668-large_default/cibo-per-cani-crocchette-con-agnello-e-cereali-integrali-natural-trainer.jpg');
//setCategory() è un metodo dei PRODOTTI
$croccantini->setCategory('Cane');
//setWeight() è un metodo del CIBO
$croccantini->setWeight('3000');
$croccantini->setIngredients('Agnello, Cereali Integrali');