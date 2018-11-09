<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>



<link rel="stylesheet" type="text/css" href="../view/carac.css">

<!------ Include the above in your HEAD tag ---------->


</head>
<body>
  <div class="retour_div">


  <a href="../controler/galerie-ctrl.php?s=<?php echo($s)?>">
    <img class="retour" src="../model/data/img/retour.png" alt="">
  </a>
  </div>
  <div class="box">
<div class="image_sneakers">
  <img class="img_sneakers" src="<?='../model/data/img/'.$listAll[$id]->getImg()?>"/>
</div>
<div class="box_carac">
<div class="vide1">
</div>

<div class="container_carac">
  <div class="box_container_carac">
  <div class="vide_box_carac1">
  </div>
  <ul class="carac">
    <li class="carac_marque">
      <h1><?=$listAll[$id]->getMarque()?></h1>
    </li>
    <li class="carac_modele">
      <h2><?=$listAll[$id]->getModele()?></h2>
    </li>
    <li class="carac_prix">
        <p><?=$listAll[$id]->getPrix()?> €</p>
    </li>
    <li class="carac_gamme">
      <p>Sexe :

        <?php
        if($listAll[$id]->getGamme()=="H"){echo("Homme");}
        else { echo("Femme");}  ?>
      </p>
      <p>Couleur :

        <?php
        echo($listAll[$id]->getCouleur())  ?>
      </p>
    </li>
    <li class="carac_taille">
      <FORM>
        <p class="p_taille">Taille : </p>
      <SELECT name="tailles" size="1">
      <OPTION>36 (En Stock)
      <OPTION>37 (En Stock)
      <OPTION>38 (En Stock)
      <OPTION>39 (En Stock)
      <OPTION>40 (En Stock)
      <OPTION>41 (En Stock)
      <OPTION>42 (En Stock)
      <OPTION>43 (En Stock)
      <OPTION>44 (En Stock)
      </SELECT>
      </FORM>
    </li>

  </ul>



  </div>
  <div class="vide_box_carac2">
  </div>
</div>

</div>
<div class="vide2">
</div>
</div>
</div>
</body>
</html>
