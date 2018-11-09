<?php

    require_once('../model/SneakerDAO.class.php');
    require_once('../model/Sneaker.class.php');


    function triABullesC(&$ttab,$n){

      for ($i=1;$i<($n-1);$i++){
           for ($j=($i+1);$j<$n;$j++){

               if ($ttab[$j]->getPrix()<$ttab[$i]->getPrix()){

                 $temp = $ttab[$i];
                 $ttab[$i]=$ttab[$j];
                 $ttab[$j]=$temp;
               }

           }

      }
    }
    function triABullesD(&$ttab,$n){

      for ($i=1;$i<($n-1);$i++){
           for ($j=($i+1);$j<$n;$j++){
               if ($ttab[$j]->getPrix()>$ttab[$i]->getPrix()){
                 $temp = $ttab[$i];
                 $ttab[$i]=$ttab[$j];
                 $ttab[$j]=$temp;
               }
           }

      }
    }


      if (isset($_GET['s']) ) {

        $s = $_GET['s'];
      } else {
        $s = 1;   //1 1 = tous
      }



      //choix categorie de prix
      //1 = -80 €
      //2 = 80;100
      //3 = 100;120
      //4 = +120

     if($_POST["prix"]=="1"){
       $t=1;
     } else if($_POST["prix"]=="2"){
            $t=2;
     } else if($_POST["prix"]=="3"){
                 $t=3;
    }else if($_POST["prix"]=="4"){
           $t=4;
         }
         else {
           $t=0;
         }




      if($_POST["tri"]=="1"){
        $tri=1;
      } else if($_POST["tri"]=="2"){
             $tri=2;
      } else {
        $tri=0;
      }


/*
      if($_POST["marque"]=="nike"){
        $marque="nike";
      } else if($_POST["marque"]=="adidas"){
             $marque="adidas";
      } else {
        $marque=0;
      }

*/







      if($s == 1){
        $choix="all";
      } else if($s==2) {
        $choix="homme";
      } else if($s==3) {
        $choix="femme";
      }

      $firstId = 1;
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

                $listFemme[0] = null;
               if($listAll[$i]->getGamme()=="F"){
                 $listFemme[] = $listAll[$i];
               }

             }



               $list= $listFemme;

} else if($choix == "homme"){

  for($i=$firstId; $i<$lastId;$i++){

        $listHomme[0] = null;
         if($listAll[$i]->getGamme()=="H"){
           $listHomme[] = $listAll[$i];
         }

       }
  $list=$listHomme;
} else {
  $list = $listAll;
}


//tri decroissant ou croissant
if ($tri==1){
  triABullesC($list,count($list));
} else if ($tri==2) {
  triAbullesD($list,count($list));

}



//tri par tranche de prix
//1 = -80 €
//2 = 80;100
//3 = 100;120
//4 = +120

if($t!=0){

  if($t==1){
    for($i=$firstId; $i<count($list);$i++){

      if($list[$i]->getPrix()>80){
        unset($list[$i]);
      }
    }
  }

  if($t==2){
    for($i=$firstId; $i<count($list);$i++){

      if($list[$i]->getPrix()<80 || $list[$i]->getPrix()>100){
        unset($list[$i]);
          }
        }
      }

  if($t==3){
    for($i=$firstId; $i<count($list);$i++){

      if($list[$i]->getPrix()<100 || $list[$i]->getPrix()>120){
        unset($list[$i]);
        }
      }
  }

  if($t==4){
    for($i=$firstId; $i<count($list);$i++){

      if($list[$i]->getPrix()<=120){
        unset($list[$i]);
        }
      }
  }


  }


//tri par marque
/*
if($marque!=0){
  if($marque=="nike"){
    for($i=$firstId; $i<count($list);$i++){

      if($list[$i]->getMarque()!="Nike"){
        unset($list[$i]);
      }
    }
  }

  if($marque=="adidas"){
    for($i=$firstId; $i<count($list);$i++){

      if($list[$i]->getMarque()!="Adidas"){
        unset($list[$i]);
      }
    }
  }

}
*/











require_once("../view/galerie-view.php");

 ?>
