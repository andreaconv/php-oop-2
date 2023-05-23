<?php

$listProducts = [];

//prodotti di tipo ACCESSORIO
include_once 'Db/db-accessory.php';

//prodotti di tipo CIBO
include_once 'Db/db-food.php';

//prodotti di tipo GIOCATTOLO
include_once 'Db/db-toys.php';

var_dump($listProducts);

?>

<?php include_once 'Views/layout/head.php' ?>

<!-- TODO: 
1. Quando una stringa restituisce null inserire un testo alternativo (ND) oppure nulla in base alla situazione
2. Convertire il peso da grammi a kg se supera le 4 cifre -->

<body>

  <div class="container py-5">

    <h1>shop</h1>

    <img src="" alt="">

  </div>
</body>
</html>