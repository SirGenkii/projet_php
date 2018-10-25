<?php
class SneakerDAO {
  private $db;  //reference a l'objet PDO
  function __construct()
  {
    $this->db = new PDO('sqlite:data/music.db');
  }
  function get(int $id) : Music
  {
   $sql =  'SELECT * FROM music WHERE id='."$id";
   $sth=$this->db->query($sql);
   $musicArray =  $sth->fetch(PDO::FETCH_ASSOC);
   $music  = new Music($musicArray["id"],$musicArray["author"],$musicArray["title"],$musicArray["cover"],$musicArray["mp3"],$musicArray["category"]);
   return $music;
 }
}
?>
