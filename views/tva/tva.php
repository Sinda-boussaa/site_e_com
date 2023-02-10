<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
include_once ROOT . '/views/includes/header.php'; ?>

<body>
  <?php include_once ROOT . 'views/includes/navbar.php'; ?>
  
  <a href="<?= URL ?>src/Controller/TvaController.php?param=addTva" class="btn btn-primary" style="margin: 10px;">ajouter une tva</a>
  <table class="table">
    <thead>
      <tr class="grey-background">
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">taux</th>
        <th scope="col">action</th>
        
        
        
      </tr>
    </thead>
    <tbody>
      <?php foreach ($tvas as $tva) : ?>
        <tr>
          <th scope="row"><?= $tva->id ?></th>
          <td> <?= $tva->name ?> </td>
          <td>
            

            <p><?= $tva->taux ?></p>
          </td>
          <td>
            <a href="<?= URL ?>src/Controller/TvaController.php?param=deleteTva&id=<?= $tva->id ?>"><i class="fas fa-trash-alt danger"></i></a>
          
            <a href="<?= URL ?>src/Controller/TvaController.php?param=showTva&id=<?= $tva->id ?>"><i class="fas fa-eye"></i></a>
         
          <a href="<?= URL ?>src/Controller/TvaController.php?param=editTva&id=<?= $tva->id ?>">
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