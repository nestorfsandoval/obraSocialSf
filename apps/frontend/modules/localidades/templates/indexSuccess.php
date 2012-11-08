<h1>Localidads List</h1>

<table>
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
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('localidades/new') ?>">New</a>
