<h1>Reparticions List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripcion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Reparticions as $Reparticion): ?>
    <tr>
      <td><a href="<?php echo url_for('reparticiones/edit?id='.$Reparticion->getId()) ?>"><?php echo $Reparticion->getId() ?></a></td>
      <td><?php echo $Reparticion->getDescripcion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('reparticiones/new') ?>">New</a>
