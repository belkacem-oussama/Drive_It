<form>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputVehicule">Véhicule</label>
    <select class="form-control" id="">
      <option value="cars">Sélectionnez un véhicule</option>
    <?php foreach ($cars_list as $cars) { ?>
        <option><?= $cars->model ?></option>
        <?php } ?>
    </select>
  </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Date de début de la location</label>
      <input type="date" class="form-control" id="">
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress">Date de fin de la location</label>
    <input type="date" class="form-control" id="">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Nom client</label>
    <input type="text" class="form-control" id="">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Prénom client</label>
    <input type="text" class="form-control" id="">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Téléphone client</label>
    <input type="text" class="form-control" id="">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Mail client</label>
    <input type="email" class="form-control" id="">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Adresse client</label>
    <input type="text" class="form-control" id="">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ville client</label>
      <input type="text" class="form-control" id="">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Ajouter</button></form>