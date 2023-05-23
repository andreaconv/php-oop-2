<?php

require __DIR__ . '/../models/Accessory.php';

$voliera = new Accessory('Voliera Wilma');
$voliera->setImage('https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg?v=1769589130');
$voliera->setCategory('Uccello');
$voliera->setMaterial('Legno');
$voliera->setSize('M: L 83 x P 67 x H153 cm');
$listProducts[] = $voliera;


$cartucce = new Accessory('Cartucce EasyCrystal');
$cartucce->setImage('https://ibrio.it/5008-Ebay/tetra-cartucce-filtranti-per-filtri-easycrystal-250-e-300-per-filtraggio-in-acquario.jpg');
$cartucce->setCategory('Pesce');
$cartucce->setMaterial('Materiale espanso');
$cartucce->setSize('');
$listProducts[] = $cartucce;

