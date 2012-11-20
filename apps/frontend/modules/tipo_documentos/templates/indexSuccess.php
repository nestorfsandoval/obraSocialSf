<h1>Tipo de Documentos</h1>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Descripcion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Tipodocs as $Tipodoc): ?>
    <tr>
      <td><a href="<?php echo url_for('tipo_documentos/edit?id='.$Tipodoc->getId()) ?>"><?php echo $Tipodoc->getId() ?></a></td>
      <td><?php echo $Tipodoc->getDescripcion() ?></td>
      <td><a class="btn btn-mini" href="<?php echo url_for('tipo_documentos/edit?id='.$Tipodoc->getId()) ?>"><i class="icon-pencil"></i></a></td>
      <td><?php echo link_to('<i class="icon-trash"></i>', 'tipo_documentos/delete?id='.$Tipodoc->getId(), array('method' => 'delete', 'confirm' => 'Esta Seguro?','class'=>'btn btn-mini')) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a class="btn" href="<?php echo url_for('tipo_documentos/new') ?>">Nuevo</a>
