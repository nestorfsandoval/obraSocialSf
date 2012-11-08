<h1>Plans List</h1>

<table>
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
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('planes/new') ?>">New</a>
