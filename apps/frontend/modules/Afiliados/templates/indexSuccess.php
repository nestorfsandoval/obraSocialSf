<h1>Afiliados List</h1>

<table>
  <thead>
    <tr>
      <th>Tipo doc</th>
      <th>Nro doc</th>
      <th>Ape nom</th>
      <th>Sexo</th>
      <th>Fecha nac</th>
      <th>Estado civil</th>
      <th>Calle</th>
      <th>Altura</th>
      <th>Piso</th>
      <th>Depto</th>
      <th>Codigo plan</th>
      <th>Afiliado tipo doc</th>
      <th>Afiliado nro doc</th>
      <th>Borrado</th>
      <th>Localidad</th>
      <th>Telefono</th>
      <th>Fecha in</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($afiliados as $afiliado): ?>
    <tr>
      <td><a href="<?php echo url_for('Afiliados/edit?tipo_doc='.$afiliado->getTipoDoc().'&nro_doc='.$afiliado->getNroDoc()) ?>"><?php echo $afiliado->getTipoDoc() ?></a></td>
      <td><a href="<?php echo url_for('Afiliados/edit?tipo_doc='.$afiliado->getTipoDoc().'&nro_doc='.$afiliado->getNroDoc()) ?>"><?php echo $afiliado->getNroDoc() ?></a></td>
      <td><?php echo $afiliado->getApeNom() ?></td>
      <td><?php echo $afiliado->getSexo() ?></td>
      <td><?php echo $afiliado->getFechaNac() ?></td>
      <td><?php echo $afiliado->getEstadoCivil() ?></td>
      <td><?php echo $afiliado->getCalle() ?></td>
      <td><?php echo $afiliado->getAltura() ?></td>
      <td><?php echo $afiliado->getPiso() ?></td>
      <td><?php echo $afiliado->getDepto() ?></td>
      <td><?php echo $afiliado->getCodigoPlan() ?></td>
      <td><?php echo $afiliado->getAfiliadoTipoDoc() ?></td>
      <td><?php echo $afiliado->getAfiliadoNroDoc() ?></td>
      <td><?php echo $afiliado->getBorrado() ?></td>
      <td><?php echo $afiliado->getLocalidad() ?></td>
      <td><?php echo $afiliado->getTelefono() ?></td>
      <td><?php echo $afiliado->getFechaIn() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('Afiliados/new') ?>">New</a>
