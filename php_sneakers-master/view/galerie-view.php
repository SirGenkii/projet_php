

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" type="text/css" href="galerie.css">


<div class="container-fluid" style="margin-top:20px;">
<h1 style="text-align:center;color:hotpink;">Portfolio Gallery Filter</h1><br>
<div class="row">


<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="showall-tab"  href="../controler/galerie-ctrl.php?s=a" role="tab" aria-controls="showall" aria-selected="true">Tout</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="h-tab" data-toggle="pill" href="../controler/main-ctrl.php?s=f"role="tab" aria-controls="homme" aria-selected="false">Homme</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="f-tab" data-toggle="pill" href="../controler/galerie-ctrl.php?s=a" role="tab" aria-controls="hemme" aria-selected="false">Femme</a>
  </li>

</ul>
</div><hr noshade style="margin-top:-20px;">
<div class="container">
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="showall" role="tabpanel" aria-labelledby="showall-tab">
    <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a><div class="desc">Car 1</div></div>
    <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a><div class="desc">City 1</div></div>
    <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a><div class="desc">Car 2</div></div>
    <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a><div class="desc">Forest 1</div></div>
    <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a><div class="desc">Forest 2</div></div>
    <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a><div class="desc">City 2</div></div>
    <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a><div class="desc">Car 3</div></div>
    <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a><div class="desc">City 3</div></div>
    <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a><div class="desc">Forest 3</div></div>

  </div>
  <div class="tab-pane fade" id="Cars" role="tabpanel" aria-labelledby="Cars-tab">
    <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a><div class="desc">Car 1</div></div>
    <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a><div class="desc">Car 2</div></div>
    <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a><div class="desc">Car 3</div></div>
  </div>
  <div class="tab-pane fade" id="City" role="tabpanel" aria-labelledby="City-tab">
    <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a><div class="desc">City 1</div></div>
    <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a><div class="desc">City 2</div></div>
    <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a><div class="desc">City 3</div></div>
  </div>
  <div class="tab-pane fade" id="Forest" role="tabpanel" aria-labelledby="Forest-tab">
    <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a><div class="desc">Forest 1</div></div>
    <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a><div class="desc">Forest 2</div></div>
    <div class="Portfolio"><a href="#!"><img class="card-img" src="http://placehold.it/400x400" alt=""></a><div class="desc">Forest 3</div></div>
  </div>
</div>
</div>

</div>
