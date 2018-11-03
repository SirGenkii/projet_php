<?php

    require_once('../model/SneakerDAO.class.php');
    require_once('../model/Sneaker.class.php');


      if (isset($_GET['s']) ) {

        $s = $_GET['s'];
      } else {
        $s = 1;   //1 1 = tous
      }


      if($s == 1){
        $choix="all";
      } else if($s==2) {
        $choix="homme";
      } else if($s==3) {
        $choix="femme";
      }

      $firstId = 2;
      $lastId = 40;


    //  $config = parse_ini_file('../config/config.ini');
      $sneakers = new SneakerDAO('../model/data');



      for($i=$firstId; $i<$lastId;$i++){
             // Récupération de l'objet Sneaker
             $sneaker = $sneakers->get($i);
             // Ajout à la liste des images à afficher
             $listAll[$i] = $sneaker;
           }

 if($choix == "femme") {



        for($i=$firstId; $i<$lastId;$i++){

               if($listAll[$i]->getGamme()=="F"){



                 $listFemme[] = $listAll[$i];

               }

             }



               $list= $listFemme;

} else if($choix == "homme"){

  for($i=$firstId; $i<$lastId;$i++){

         if($listAll[$i]->getGamme()=="H"){
           $listHomme[] = $listAll[$i];
         }

       }
  $list=$listHomme;
} else {
  $list = $listAll;
}






require_once("../view/galerie-view.php");

 ?>
