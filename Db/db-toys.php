<?php

require __DIR__ . '/../models/Toys.php';

$kong  = new Toys('Kong Classic');
$kong ->setImage('https://www.thekill.it/206-large_default/gioco-gomma-naturale-kong-classic.jpg');
$kong ->setCategory(['Cane', 'Gatto']);
$kong ->setPrice(13.99);
$kong ->getCharacteristics('Galleggia e rimbalza');
$kong ->setSize('8,5 cm x 10cm');
$listProducts[] = $kong;