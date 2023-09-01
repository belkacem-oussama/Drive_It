<div class="table-responsive">
  <table class="table table-condensed table-striped table-bordered table-hover no-margin">
    <thead>
      <tr>
        <th style="width:10%" class="hidden-phone">Début location</th>
        <th style="width:10%" class="hidden-phone">Fin location</th>
        <th style="width:10%" class="hidden-phone">Durée location</th>
        <th style="width:20%" class="hidden-phone">Client</th>
        <th style="width:40%">Véhicule</th>
        <th style="width:15%" class="hidden-phone">Kilomètres initial</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($orders_coming as $order_coming) { ?>
      <tr>
        <td class="hidden-phone"><?=$order_coming->dateStart ?></td>
        <td class="hidden-phone"><?= $order_coming->dateEnd ?></td>
        <td class="hidden-phone">
          <span class="label label-info"><?= $order_coming->location_duration_days ?> jours</span>
          <td>
            <span class="name"><?= $order_coming->firstname?> <?= $order_coming->lastname ?></span>
          </td>
          <td class="hidden-phone"><?=$order_coming->brand ?> <?=$order_coming->model ?></td>
          <td class="hidden-phone"><?=$order_coming->km_start ?> km</td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
