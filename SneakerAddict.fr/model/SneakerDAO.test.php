
<?php
require_once('SneakerDAO.class.php');
require_once('Sneaker.class.php');

// Récupération des données de configuration
//$config = parse_ini_file('../config/config.ini');





// Creation de l'instace DAO
$jukebox = new SneakerDAO('/users/info/etu-s3/baillyju/public_html/ProgWeb/php_sneakerv1.4/model/data');

$m = $jukebox->get(20);
var_dump($m);
?>
