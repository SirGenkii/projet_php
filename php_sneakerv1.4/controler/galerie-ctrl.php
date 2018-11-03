<?php

      require_once('../model/SneakerDAO.class.php');
      require_once('../model/Sneaker.class.php');


      if (isset($_GET['s']) ) {

        $s = $_GET['s'];
      } else {
        $s = 1;   //1 1 = tous
      }

/*
      if($s == 1){
        $choix="all";
      } else if($s==2) {
        $choix="homme";
      } else if($s==3) {
        $choix="femme";
      }
*/

    //  $config = parse_ini_file('../config/config.ini');
      $sneakers = new SneakerDAO('/users/info/etu-s3/baillyju/public_html/ProgWeb/php_sneakerv1.4/model/data');



      for($i=19; $i<29;$i++){
             // Récupération de l'objet Sneaker
             $sneaker = $sneakers->get($i);
             // Ajout à la liste des images à afficher
             $list[$i] = $sneaker;
           }


    $sneakers->getAll();       




    require_once("../view/galerie-view.php");

 ?>
