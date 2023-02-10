<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
include_once ROOT .'views/includes/header.php'; ?>

<body>
    <?php include_once ROOT . 'views/includes/navbar.php'; ?>
    <a href="javascript:history.back()" class="btn btn-primary" style="margin: 10px;" >
  <i class="fas fa-arrow-left"></i> Retour
</a>
        <h4 style="margin: 10px;">Nom de la marque</h4>
         <p style="margin: 10px;"><?= $marque->name ?></p>

    <?php include_once ROOT . 'views/includes/footer.php'; ?>
</body>

</html>