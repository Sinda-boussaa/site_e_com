<?php

use App\Model\Repository\MarqueRepository;

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
include_once $path . '/src/Model/Repository/MarqueRepository.php';

$marqRepo = new MarqueRepository();


//je recup le param passé dans l'url
if($_GET['param']){
    $param = $_GET['param'];
}


//je teste le param passé dans l url
switch($param){
    //param = liste donc j'affiche la liste des marques
    case 'liste':
        $marques = $marqRepo->findAll();
        include_once ROOT . 'views/marque/marque.php';
        break;
    // param = addMarque j'affiche le formulaire pour ajouter une marque
    case 'addMarque':
        if($_POST){
            $marqRepo->add($_POST);
            header("location: MarqueController.php?param=liste");
        }
        include_once ROOT . 'views/marque/addMarque.php';
        break;  

    case 'deleteMarque':
        $id = $_GET['id'];
        $marqRepo->delete($id);
        header("location: MarqueController.php?param=liste");

        break;    
        
    case 'showMarque':
        $id = $_GET['id'];
        $marque = $marqRepo->find($id);
        include_once ROOT . 'views/marque/showMarque.php';

        break;

    case 'editMarque':
         $id = $_GET['id'];
         //je recupere l'enregistrement a modifier pour completer les inputs du formulaire
         // la recuperation se fait avant la modification
         $marque = $marqRepo->find($id);
        if($_POST){
        $marqRepo->edit($_POST , $id);
        header("location: MarqueController.php?param=liste");
        }
        include_once ROOT . 'views/marque/editMarque.php';
        break; 
        
}
