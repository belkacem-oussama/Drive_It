<div class="table-responsive">
  <table class="table table-condensed table-striped table-bordered table-hover no-margin">
    <thead>
      <tr>
        <th style="width:10%" class="hidden-phone">Date location</th>
        <th style="width:20%" class="hidden-phone">Client</th>
        <th style="width:40%">Véhicule</th>
        <th style="width:10%" class="hidden-phone">Durée location</th>
        <th style="width:15%" class="hidden-phone">Kilomètres parcourus</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($orders_finished as $order_finished) { ?>
      <tr>
        <td class="hidden-phone"><?=$order_finished->date ?></td>
        <td>
          <span class="name"><?= $order_finished->firstname?> <?= $order_finished->lastname ?></span>
        </td>
        <td class="hidden-phone"><?= $order_finished->brand ?> <?=$order_finished->model ?></td>
        <td class="hidden-phone">
          <span class="label label-info"><?= $order_finished->location_duration_days ?> jours</span>
        </td>
        <td class="hidden-phone"><?=$order_finished->location_duration ?> km</td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
