<?php

  //require_once ('../model/Music.class.php');
  //require_once ('../model/MusicDAO.class.php');



  if (isset($_GET['s']) ) {

    $search = $_GET['s'];
  } else {
    $search = "a";   //1 normalement mais on ne scan pas la premiere
  }



/*
$config = parse_ini_file('../config/config.ini');
$jukebox = new MusicDAO($config['database_path']);
*/

if($search = "h"){
  echo cbndrlqu;
}


include "../view/galerie-view.php";
include "../view/galerie.css";






 ?>
