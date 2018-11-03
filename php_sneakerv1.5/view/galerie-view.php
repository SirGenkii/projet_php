<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>



<link rel="stylesheet" type="text/css" href="../view/galerie.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


</head>
<body>
<div class="container-fluid" style="margin-top:20px;">
<h1 style="text-align:center;color:hotpink;">Les sneakers pas cheres du bled</h1><br>
<div class="row">


<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="showall-tab"  href="../controler/galerie-ctrl.php?s=1" role="tab" aria-controls="showall" aria-selected="true">Tout</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="h-tab"  href="../controler/galerie-ctrl.php?s=2" role="tab" aria-controls="homme" aria-selected="false">Homme</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="f-tab"  href="../controler/galerie-ctrl.php?s=3"  role="tab" aria-controls="femme" aria-selected="false">Femme</a>
  </li>

</ul>
</div>

<div class="container">
<div class="tab-content" id="pills-tabContent">






    <?php  for($i=$firstId; $i<sizeof($list);$i++){ ?>
        <div class="Portfolio"><img src="<?='../model/data/img/'.$list[$i]->getImg()?>"/><div class="desc"><?= $list[$i]->getMarque()." | ".$list[$i]->getModele() ?></div></div>

          <?php } ?>




  </div>



</div>

</div>
</body>
</html>
