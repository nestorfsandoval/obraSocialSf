<h1>Prestadores</h1>

<table>
  <thead>
    <tr>
      <th>Codigo</th>
      <th>Nombre</th>
      <th>Calle</th>
      <th>Numero</th>
      <th>Piso</th>
      <th>Departamento</th>
      <th>Codigo especialidad</th>
      <th>Fecha modif</th>
      <th>Fecha vista</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Prestadors as $Prestador): ?>
    <tr>
      <td><a href="<?php echo url_for('prestadores/edit?codigo='.$Prestador->getCodigo()) ?>"><?php echo $Prestador->getCodigo() ?></a></td>
      <td><?php echo $Prestador->getNombre() ?></td>
      <td><?php echo $Prestador->getCalle() ?></td>
      <td><?php echo $Prestador->getNumero() ?></td>
      <td><?php echo $Prestador->getPiso() ?></td>
      <td><?php echo $Prestador->getDepto() ?></td>
      <td><?php echo $Prestador->getCodigoEspecialidad() ?></td>
      <td><?php echo $Prestador->getFechaModif() ?></td>
      <td><?php echo $Prestador->getFechaVista() ?></td>
      <td><a class="btn btn-mini" href="<?php echo url_for('prestadores/edit?codigo='.$Prestador->getCodigo()) ?>"><i class="icon-pencil"></i></a></td>
      <td><?php echo link_to('<i class="icon-trash"></i>', 'prestadores/delete?codigo='.$Prestador->getCodigo(), array('method' => 'delete', 'confirm' => 'Esta seguto?','class'=>'btn btn-mini')) ?></td>
     
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('prestadores/new') ?>">Nuevo</a>
