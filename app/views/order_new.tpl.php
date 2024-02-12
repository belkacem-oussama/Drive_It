<form method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputVehicule">Véhicule</label>
      <select class="form-control" id="inputCars" name="cars" required>
        <option value="cars_id">Sélectionnez un véhicule</option>
        <?php foreach ($cars_list as $car) { ?>
          <option value="<?= $car->CarsId ?>"><?= $car->brand . ' ' . $car->model ?></option>
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
    <label for="inputAddress">Kilométrage de début de la location</label>
    <input type="text" class="form-control" id="inputKmStart" name="km_start" required>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress">Kilométrage de fin de la location</label>
    <input type="text" class="form-control" id="inputKmEnd" name="km_end" required>
  </div>
  <div class="form-group col-md-6">
    <label for="inputVehicule">Client</label>
    <select class="form-control" id="inputName" name="name" required>
      <option value="cars">Sélectionnez un client</option>
      <?php foreach ($drivers_list as $driver) { ?>
        <option><?= $driver->firstname . ' ' . $driver->lastname ?></option>
      <?php } ?>
    </select>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress">Commentaires</label>
    <input type="text" class="form-control" id="comments" name="comments">
  </div>
  <div class="form-group">
    <div class="form-check">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>