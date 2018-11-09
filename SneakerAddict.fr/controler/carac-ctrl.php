<?php

    require_once('../model/SneakerDAO.class.php');
    require_once('../model/Sneaker.class.php');



    if (isset($_GET['id']) ) {

      $id = $_GET['id'];
    } else {
      $id = 1;
    }
        if (isset($_GET['s']) ) {

      $s = $_GET['s'];
    } else {
      $s = 1;
    }


    $firstId = 1;
    $lastId = 40;

    $sneakers = new SneakerDAO('../model/data');

    for($i=$firstId; $i<$lastId;$i++){
           // Récupération de l'objet Sneaker
           $sneaker = $sneakers->get($i);
           // Ajout à la liste des images à afficher
           $listAll[$i] = $sneaker;
         }








    require_once("../view/carac-view.php");
?>
