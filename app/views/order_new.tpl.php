<form method="POST">
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputVehicule">Véhicule</label>
    <select class="form-control" id="inputCars" name="cars">
      <option value="cars">Sélectionnez un véhicule</option>
    <?php foreach ($cars_list as $cars) { ?>
        <option><?= $cars->brand.' '.$cars->model ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Date de début de la location</label>
      <input type="date" class="form-control" id="inputStartDate" name="start_date" required>
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress">Date de fin de la location</label>
    <input type="date" class="form-control" id="inputEndDate" name="end_date" required>
  </div>
  <div class="form-group col-md-6">
  <label for="inputVehicule">Client</label>
    <select class="form-control" id="inputName" name="name">
      <option value="cars">Sélectionnez un client</option>
    <?php foreach ($drivers_list as $driver) { ?>
        <option><?= $driver->firstname.' '. $driver->lastname ?></option>
        <?php } ?>
    </select>
  </div>
  <div class="form-group">
    <div class="form-check">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
