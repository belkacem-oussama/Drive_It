<form method="POST" >
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputVehicule">Véhicule</label>
    <select class="form-control" id="inputCars" name="cars">
      <option value="cars">Sélectionnez un véhicule</option>
    <?php foreach ($cars_list as $cars) { ?>
        <option><?= $cars->model ?></option>
        <?php } ?>
    </select>
  </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Date de début de la location</label>
      <input type="date" class="form-control" id="inputStartDate" name="start_date">
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress">Date de fin de la location</label>
    <input type="date" class="form-control" id="inputEndDate" name="end_date">
  </div>
  <div class="form-group col-md-6">
  <label for="inputVehicule">Prénom Client</label>
    <select class="form-control" id="inputName" name="name">
      <option value="cars">Sélectionnez un client</option>
    <?php foreach ($drivers_list as $driver) { ?>
        <option><?= $driver->firstname.' '. $driver->lastname ?></option>
        <?php } ?>
    </select>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Téléphone client</label>
    <input type="text" class="form-control" id="inputPhone" name="phone">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Mail client</label>
    <input type="email" class="form-control" id="inputMail" name="mail">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Adresse client</label>
    <input type="text" class="form-control" id="inputLocation" name="location">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ville client</label>
      <input type="text" class="form-control" id="inputCity" name="city">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Ajouter</button></form>