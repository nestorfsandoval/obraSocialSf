<h2>Afiliados</h2>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Nro doc</th>
      <th>Apenombre</th>
      <th>Sexo</th>
      <th>Fechanac</th>
      <th>Estadocivil</th>
      <th>Fechaingreso</th>
      <th>Editar</th>
      <th>Borrar</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Afiliados as $Afiliado): ?>
    <tr>
      <td><?php echo $Afiliado->getNroDoc() ?></td>
      <td><?php echo $Afiliado->getApenombre() ?></td>
      <td><?php echo $Afiliado->getSexo() ?></td>
      <td><?php echo $Afiliado->getFechanac() ?></td>
      <td><?php echo $Afiliado->getEstadocivil() ?></td>      
      <td><?php echo $Afiliado->getFechaingreso() ?></td>
      <td><a class="btn btn-mini" href="<?php echo url_for('afiliados/edit?id='.$Afiliado->getId()) ?>"><i class="icon-pencil"></i></a></td>
      <td><?php echo link_to('<i class="icon-trash"></i>', 'afiliados/delete?id='.$Afiliado->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?','class'=>'btn btn-mini')) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn" href="<?php echo url_for('afiliados/new') ?>">Agregar Afiliado</a>
