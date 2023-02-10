<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
include_once ROOT .'views/includes/header.php'; ?>

<body>
    <?php include_once ROOT . 'views/includes/navbar.php'; ?>

    <div class="container">

        <form action="<?= URL ?>src/Controller/TvaController.php?param=addTva" method="post">
        <?php if ($error) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $error ?>
                </div>
            <?php endif ?>
            <label for="name" class="label-control">ajouter une tva</label>

            <input type="text" value="<?php if(isset($name)){echo $name;} ?>" name="name" id="name" class="form-control">
            <label for="taux" class="label-control">ajouter un taux</label>

            <input type="number" step="0.01" name="taux" id="taux" class="form-control">

            <button type="submit" class="btn btn-success" value="Enregistrer">ok</button>

        </form>

    </div>


    <?php include_once ROOT . 'views/includes/footer.php'; ?>
</body>

</html>