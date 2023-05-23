<?php

require __DIR__ . '/../models/Toys.php';

$kong  = new Toys('Kong Classic');
$kong ->setImage('https://www.thekill.it/206-large_default/gioco-gomma-naturale-kong-classic.jpg');
$kong ->setCategory(['<i class="fa-solid fa-dog"></i>', 'Cane', '-', '<i class="fa-solid fa-cat"></i>', 'Gatto']);
$kong ->setPrice(13.99);
$kong ->setCharacteristics('Caratteristiche: Galleggia e rimbalza');
$kong ->setSize('8,5 cm x 10cm');
$listProducts[] = $kong;