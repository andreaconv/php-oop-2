<?php

//prodotti di tipo ACCESSORIO
include_once 'Db/db-accessory.php';

//prodotti di tipo CIBO
include_once 'Db/db-food.php';

//prodotti di tipo GIOCATTOLO
include_once 'Db/db-toys.php';

var_dump($listAccessory);
var_dump($croccantini);
var_dump($kong);

?>

<?php include_once 'Views/layout/head.php' ?>

<body>

  <div class="container py-5">

    <h1>shop</h1>

    <img src="https://picsum.photos/v2/list" alt="">

  </div>
</body>
</html>