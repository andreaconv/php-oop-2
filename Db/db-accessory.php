<?php

require __DIR__ . '/../models/Accessory.php';

$listAccessory = [];

$voliera = new Accessory('Voliera Wilma');
$voliera->setCategory('Uccello');
$voliera->setMaterial('Legno');
$voliera->setSize('M: L 83 x P 67 x H153 cm');
$listAccessory[] = $voliera;


$cartucce = new Accessory('Cartucce EasyCrystal');
$cartucce->setCategory('Pesce');
$cartucce->setMaterial('Materiale espanso');
$cartucce->setSize('');
$listAccessory[] = $cartucce;

