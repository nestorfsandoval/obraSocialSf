<h1>Localidades</h1>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripcion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Localidads as $Localidad): ?>
    <tr>
      <td><a href="<?php echo url_for('localidades/edit?id='.$Localidad->getId()) ?>"><?php echo $Localidad->getId() ?></a></td>
      <td><?php echo $Localidad->getDescripcion() ?></td>
      <td><a class="btn btn-mini" href="<?php echo url_for('localidades/edit?id='.$Localidad->getId()) ?>"><i class="icon-pencil"></i></a></td>
      <td><?php echo link_to('<i class="icon-trash"></i>', 'localidades/delete?id='.$Localidad->getId(), array('method' => 'delete', 'confirm' => 'Esta seguro?','class'=>'btn btn-mini')) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a class="btn" href="<?php echo url_for('localidades/new') ?>">Nuevo</a>
