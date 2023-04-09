<?php foreach($cars as $car){?> 
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?=$car->brand?> <?= $car->model ?></h5>
    <p class="card-text">Puissance :<?= $car->power ?>ch</p>
    <p class="card-text">Année :<?= $car->year ?></p>
    <p class="card-text">Caution :<?= $car->caution ?>€</p>
    <p class="card-text">Prix :<?= $car->price ?>€ la journée.</p>
    <a href="#" class="btn btn-primary">Infos</a>
  </div>
</div>
<?php }?>