<h1>Reparticions List</h1>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripcion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Reparticions as $Reparticion): ?>
    <tr>
      <td><?php echo $Reparticion->getId() ?></a></td>
      <td><?php echo $Reparticion->getDescripcion() ?></td>
      <td><a class="btn btn-mini" href="<?php echo url_for('reparticiones/edit?id='.$Reparticion->getId()) ?>"><i class="icon-pencil"></i></a></td>
      <td><?php echo link_to('<i class="icon-trash"></i>', 'reparticiones/delete?id='.$Reparticion->getId(), array('method' => 'delete', 'confirm' => 'Esta Seguro?','class'=>'btn btn-mini')) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a class="btn" href="<?php echo url_for('reparticiones/new') ?>">Nuevo</a>
