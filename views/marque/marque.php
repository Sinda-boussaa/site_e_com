<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
include_once ROOT . '/views/includes/header.php'; ?>

<body>
  <?php include_once ROOT . 'views/includes/navbar.php'; ?>
  
  <a href="<?= URL ?>src/Controller/MarqueController.php?param=addMarque" class="btn btn-primary" style="margin: 10px;">ajouter une marque</a>
  <table class="table">
    <thead>
      <tr class="grey-background">
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">marque</th>
        <th scope="col">supprimer</th>
        <th scope="col">voir</th>
        <th scope="col">modifier</th>

        
      </tr>
    </thead>
    <tbody>
      <?php foreach ($marques as $marque) : ?>
        <tr>
          <th scope="row"><?= $marque->id ?></th>
          <td> <?= $marque->name ?> </td>
          <td>
            

            <p><?= $marque->name ?></p>
          </td>
          <td>
            <a href="<?= URL ?>src/Controller/MarqueController.php?param=deleteMarque&id=<?= $marque->id ?>"><i class="fas fa-trash-alt danger"></i></a>
          </td>
          <td>
            <a href="<?= URL ?>src/Controller/MarqueController.php?param=showMarque&id=<?= $marque->id ?>"><i class="fas fa-eye"></i></a>
          </td>
          <td>
          <a href="<?= URL ?>src/Controller/MarqueController.php?param=editMarque&id=<?= $marque->id ?>">
  <i class="fas fa-pen"></i>
</a>

          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>

  <?php include_once ROOT . 'views/includes/footer.php'; ?>
</body>
<style>
table {
  margin: 20px auto;
  border-collapse: collapse;
  width: 80%;
}

th, td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}

th {
  background-color: #ddd;
}
.grey-background {
background-color: #f2f2f2;
}
</style>
</html>