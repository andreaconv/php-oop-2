<?php

require __DIR__ . '/../models/Toys.php';

$kong  = new Toys('Kong Classic');
$kong ->setCategory(['Cane', 'Gatto']);
$kong ->setPrice('13,49');
$kong ->getCharacteristics('Galleggia e rimbalza');
$kong ->setSize('8,5 cm x 10cm');