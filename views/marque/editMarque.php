<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
include_once ROOT .'views/includes/header.php'; ?>

<body>
    <?php include_once ROOT . 'views/includes/navbar.php'; ?>
    <a href="javascript:history.back()" class="btn btn-primary" style="margin: 10px;" >
  <i class="fas fa-arrow-left"></i> Retour
</a>

    <div class="container">

        <form action="<?= URL ?>src/Controller/MarqueController.php?param=editMarque&id=<?= $marque->id ?>" method="post">

            <label for="name" class="label-control">nom de la marque</label>

            <input type="text" value="<?= $marque->name ?>" name="name" id="name" class="form-control">

            <button type="submit" class="btn btn-success" value="Enregistrer">ok</button>

        </form>

    </div>


    <?php include_once ROOT . 'views/includes/footer.php'; ?>
</body>

</html>