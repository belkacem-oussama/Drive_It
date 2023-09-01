<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Marque</th>
      <th scope="col">Contact</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach ($dealers as $dealer) { ?>
    <tr>
        <td><?= $dealer->DealerId?></td>
        <td><?= $dealer->brand?></td>
        <td><?= $dealer->contact_name?></td>
        <td><?= $dealer->phone?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>