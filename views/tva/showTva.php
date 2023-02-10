<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
include_once ROOT .'views/includes/header.php'; ?>

<body>
    <?php include_once ROOT . 'views/includes/navbar.php'; ?>
    <a href="javascript:history.back()" class="btn btn-primary" style="margin: 10px;" >
  <i class="fas fa-arrow-left"></i> Retour
</a>
        <h4 style="margin: 10px;">Nom de la tva</h4>
         <p style="margin: 10px;"><?= $tva->name ?></p>
         <h4 style="margin: 10px;">Taux de la tva</h4>
         <p style="margin: 10px;"><?= $tva->taux ?></p>

    <?php include_once ROOT . 'views/includes/footer.php'; ?>
</body>

</html>