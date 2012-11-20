<h3>Gesti&oacute;n de Afiliados</h3>
<form action="<?php echo url_for('afiliados/index')?>" method="GET">
    
    <input class="busqueda" type="text" name="buscaAfiliado" placeholder="Ingrese nombre o nro de afiliado..." />
    <input type="image" name="buscar" src="<?php echo image_path('lupa.png')?>"/>       
</form>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Nro doc</th>
      <th>Apenombre</th>
      <th>Sexo</th>
      <th>Fechanac</th>
      <th>Estadocivil</th>
      <th>Fechaingreso</th>
      <th colspan="3" style="text-align: center">Accion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Afiliados as $Afiliado): ?>
    <tr>
      <td><?php echo $Afiliado->getNroDoc() ?></td>
      <td><?php echo $Afiliado->getApenombre() ?></td>
      <td><?php echo ($Afiliado->getSexo()==0)?'Masculino':'Femenino'; ?></td>
      <td><?php echo $Afiliado->getFechanac() ?></td>
      <td><?php echo ($Afiliado->getEstadocivil()==0)?'Soltero':'Casado' ?></td>      
      <td><?php echo $Afiliado->getFechaingreso() ?></td>
      <td>
          <button type="button" data-toggle="modal" data-target="#<?php echo $Afiliado->getNroDoc() ?>">Detalles</button>  
          <div id="<?php echo $Afiliado->getNroDoc() ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                  <h3 id="myModalLabel">Afiliado_<?php echo $Afiliado->getApenombre() ?></h3>
              </div>
              <div class="modal-body">
                  <table class="table table-hover">
                    <tr>
                        <td>Nro. Doc.:</td>
                        <td colspan="5"><?php echo $Afiliado->getTipodoc().' '.$Afiliado->getNroDoc() ?></td>
                    </tr>
                    <tr>
                        <td>Fecha de Nacimiento:</td>
                        <td colspan="5"><?php echo $Afiliado->getFechanac() ?></td>
                    </tr>
                    <tr>
                        <td>Sexo:</td>
                        <td colspan="5"><?php echo ($Afiliado->getSexo()==0)?'Masculino':'Femenino'; ?></td>
                    </tr>
                    <tr>
                        <td>Estado Civil:</td>
                        <td colspan="5"><?php echo ($Afiliado->getEstadocivil()==0)?'Soltero':'Casado' ?></td>
                    </tr>
                    <tr>
                        <td>Plan:</td>
                        <td colspan="5"><?php echo $Afiliado->getPlan()?></td>
                    </tr>
                    <tr>
                        <td>Domicilio:</td>
                        <td colspan="5"><?php echo $Afiliado->getCalle()?></td>
                    </tr>
                    <tr>
                        <td>Nro:</td><td><?php echo $Afiliado->getAltura()?></td>
                        <td>Piso:</td><td><?php echo $Afiliado->getPiso()?></td>
                        <td>Dpto:</td><td><?php echo $Afiliado->getDepto()?></td>
                    </tr>
                    <tr>
                        <td>Localidad:</td>
                        <td colspan="5"><?php echo $Afiliado->getLocalidad()?></td>
                    </tr>
                    <tr>
                        <td>Repartici&oacute;n:</td>
                        <td colspan="5"><?php echo $Afiliado->getReparticion()?></td>
                    </tr>
                    <tr>
                        <td>Fechade Ingreso:</td>
                        <td colspan="5"><?php echo $Afiliado->getFechaingreso()?></td>
                    </tr>
                  </table>
              </div>
              <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
              </div>  
          </div>
      </td>
      <td><a class="btn btn-mini" href="<?php echo url_for('afiliados/edit?id='.$Afiliado->getId()) ?>"><i class="icon-pencil"></i></a></td>
      <td><?php echo link_to('<i class="icon-trash"></i>', 'afiliados/delete?id='.$Afiliado->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?','class'=>'btn btn-mini')) ?></td>
    </tr>
  
      
  
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn" href="<?php echo url_for('afiliados/new') ?>">Agregar Afiliado</a>
