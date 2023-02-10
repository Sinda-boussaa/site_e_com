<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
include_once ROOT . '/views/includes/header.php'; ?>
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
<body>
  <?php include_once ROOT . 'views/includes/navbar.php'; ?>
  
  <a href="<?= URL ?>src/Controller/ProduitController.php?param=addProduit" class="btn btn-primary" style="margin: 10px;">ajouter une marque</a>
  <table class="table">
    <thead>
      <tr class="grey-background">
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">ref</th>
        <th scope="col">prix</th>
        <th scope="col">quantité</th>
        <th scope="col">marque</th>
        <th scope="col">image</th>
        <th scope="col">action</th>

        
      </tr>
    </thead>
    <tbody>
      <?php foreach ($produits as $produit) : ?>
        <tr>
          <td> <?= $produit->id ?> </td>
          <td> <?= $produit->name ?> </td>
          <td> <?= $produit->ref ?> </td>
          <td> <?= $produit->prix_unit ?> </td>
          <td> <?= $produit->quantity ?> </td>
          <td> <?= $produit->marque_id ?> </td>
          <td> <?= $produit->image ?> </td>
            <td>
             <a href="<?= URL ?>src/Controller/ProduitController.php?param=deleteProduit&id=<?= $produit->id ?>"><i class="fas fa-trash-alt danger"></i></a>
          
             <a href="<?= URL ?>src/Controller/ProduitController.php?param=showProduit&id=<?= $produit->id ?>"><i class="fas fa-eye"></i></a>
             <a href="<?= URL ?>src/Controller/ProduitController.php?param=editProduit&id=<?= $produit->id ?>">
             <i class="fas fa-pen"></i></a>

            </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>

  <?php include_once ROOT . 'views/includes/footer.php'; ?>
</body>

</html>