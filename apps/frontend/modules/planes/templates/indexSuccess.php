<h1>Lista de Planes</h1>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripcion</th>
      <th>Descuento</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Plans as $Plan): ?>
    <tr>
      <td><a href="<?php echo url_for('planes/edit?id='.$Plan->getId()) ?>"><?php echo $Plan->getId() ?></a></td>
      <td><?php echo $Plan->getDescripcion() ?></td>
      <td><?php echo $Plan->getDescuento() ?></td>
      <td><a class="btn btn-mini" href="<?php echo url_for('planes/edit?id='.$Plan->getId()) ?>"><i class="icon-pencil"></i></a></td>
      <td><?php echo link_to('<i class="icon-trash"></i>', 'planes/delete?id='.$Plan->getId(), array('method' => 'delete', 'confirm' => 'Esta Seguro?','class'=>'btn btn-mini')) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a class="btn" href="<?php echo url_for('planes/new') ?>">Nuevo</a>
