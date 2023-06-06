<div class="d-flex justify-content-start align-content-around flex-wrap">
<?php foreach($cars as $car){?>
    <div class="card p-2 m-2" style="width: 15rem;">
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
  </div>