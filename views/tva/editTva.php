<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
include_once ROOT .'views/includes/header.php'; ?>

<body>
    <?php include_once ROOT . 'views/includes/navbar.php'; ?>

    <div class="container">

        <form action="<?= URL ?>src/Controller/TvaController.php?param=editTva&id=<?= $tva->id ?>" method="post">
        <?php if ($error) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $error ?>
                </div>
            <?php endif ?>
            <label for="name" class="label-control">modifier une tva</label>

            <input type="text" value="<?php if(isset($tva->name)){echo $tva->name;} ?>" name="name" id="name" class="form-control">
            <label for="taux" class="label-control">ajouter un taux</label>

            <input type="number" step="0.01" name="taux" id="taux" class="form-control" value="<?php if(isset($tva->taux)){echo $tva->taux * 100;} ?>">

            <button type="submit" class="btn btn-success" value="Enregistrer">ok</button>

        </form>

    </div>


    <?php include_once ROOT . 'views/includes/footer.php'; ?>
</body>

</html>