<?php

include 'Sneaker.class.php';

class SneakerDAO {
  private $db;  //reference a l'objet PDO
  function __construct($path)
  {
    $this->db = new PDO('sqlite:'.$path.'/sneaker.db');
  }
  function get(int $id) : Sneaker
  {
   $sql =  'SELECT * FROM sneaker WHERE id='."$id";
   $sth=$this->db->query($sql);
   $sneakerArray =  $sth->fetch(PDO::FETCH_ASSOC);
   $sneaker  = new Sneaker($sneakerArray["id"],$sneakerArray["marque"],$sneakerArray["modele"],$sneakerArray["couleur"],$sneakerArray["prix"],$sneakerArray["gamme"], $sneakerArray["image"]);
   return $sneaker;
 }






}
?>
