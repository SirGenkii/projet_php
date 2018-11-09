<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>



<link rel="stylesheet" type="text/css" href="../view/galerie.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->


</head>
<body>
<div class="container-fluid" style="margin-top:20px;">

  <div id="box1">

    <div id="box11">
      <h1>Sneaker/Addict</h1><br>
      <h2>Où trouver vos Sneakers préférées</h2><br>
    </div>

    <img src="../model/data/img/logo.png" alt="" width="100px" height="100px" >

</div>

<div class="row" id="box">

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link" id="showall-tab"  href="../controler/galerie-ctrl.php?s=1" role="tab" aria-controls="showall" aria-selected="true">Tout</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="h-tab"  href="../controler/galerie-ctrl.php?s=2" role="tab" aria-controls="homme" aria-selected="false">Homme</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="f-tab"  href="../controler/galerie-ctrl.php?s=3"  role="tab" aria-controls="femme" aria-selected="false">Femme</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="vente-tab"  href="../view/vente-view.php"  role="tab" aria-controls="vente" aria-selected="false">Points de vente</a>
  </li>

</ul>
</div>


<div id="volet">
	<p>Filtrer par :</p>

    <p>Prix : </p>
<form method="post">
    <SELECT name="prix" size="1">
    <OPTION>------
    <OPTION value="1">- de 80 euros
    <OPTION value="2">de 80 à 100 euros
    <OPTION value="3">de 100 à 120 euros
    <OPTION value="4">+ de 120 euros
    </SELECT>

    <br>
    <br>
    <br>
    <p> Marque :</p>

    <SELECT name="marque" size="1">
    <OPTION>------
    <OPTION  value="adidas" > Adidas
    <OPTION  value="nike" > Nike
    </SELECT>
<br>
<br>
<br>

<p>Trier par :</p>
  <SELECT name="tri" size="1">
  <OPTION>------
  <OPTION value="1">Prix croissant
  <OPTION value="2">Prix décroissant
  </SELECT>
<input type="submit" >
</form >
<br>
	<a href="#volet" class="ouvrir">Triez !</a>
</div>

<div class="container">
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="showall" role="tabpanel" aria-labelledby="showall-tab">
    <?php  for($i=$firstId; $i<sizeof($list);$i++){ ?>
        <?php if($list[$i]!=null){ ?>
                <div class="Portfolio">
                  <a href="../controler/carac-ctrl.php?id=<?php echo($list[$i]->getId())?>&s=<?php echo($s)?>">
                    <img src="<?='../model/data/img/'.$list[$i]->getImg()?>"/>
                  </a>
                    <div class="desc"><?= $list[$i]->getMarque()." | ".$list[$i]->getModele() ?>
                                      <br>
                                      <p id="prixSneak"><?= $list[$i]->getPrix()." €" ?></p>
                    </div>
                </div>
         <?php } ?>
    <?php } ?>
</div>

  </div>



</div>

</div>
</body>
</html>
