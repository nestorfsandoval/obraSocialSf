<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form class="abm" action="<?php echo url_for('afiliados/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  
<?php echo $form->renderHiddenFields(false) ?>

        
<?php echo $form->renderGlobalErrors() ?>
<div id="afiliadoIzquierda">
<?php echo $form['apenombre']->renderLabel("Nombre y Apellido:") ?>        
<?php echo $form['apenombre']->renderError() ?>
<?php echo $form['apenombre'] ?>
<label>Documento:</label>
<?php echo $form['tipodoc_id']->renderError() ?>
<?php echo $form['tipodoc_id']->render(array('class'=>'tipoDoc')) ?>
<?php echo $form['nro_doc']->renderError() ?>
<?php echo $form['nro_doc']->render(array('class'=>'nroDoc','placeholder'=>'Ingrese su n&uacute;mero de Documento')) ?>
<?php echo $form['fechanac']->renderLabel("Fecha de Nacimiento:") ?>
<?php echo $form['fechanac']->renderError() ?>
<?php echo $form['fechanac'] ?>
<?php echo $form['sexo']->renderLabel("Sexo:") ?>
<?php echo $form['sexo']->renderError() ?>
<?php echo $form['sexo'] ?>
<?php echo $form['estadocivil']->renderLabel("Estado Civil:") ?>
<?php echo $form['estadocivil']->renderError() ?>
<?php echo $form['estadocivil'] ?>
<?php echo $form['plan_id']->renderLabel("Plan:") ?>
<?php echo $form['plan_id']->renderError() ?>
<?php echo $form['plan_id'] ?>
</div>
<div id="afiliadoDerecha">
<?php echo $form['calle']->renderLabel("Domicilio:") ?>
<?php echo $form['calle']->renderError() ?>
<?php echo $form['calle']?>

<?php echo $form['altura']->renderLabel("Nro.:") ?>
<?php echo $form['altura']->renderError();?>
<?php echo $form['altura']->render(array('class'=>'nroDireccion')) ?>

<?php echo $form['piso']->renderLabel("Piso:") ?>
<?php echo $form['piso']->renderError() ?>
<?php echo $form['piso']->render(array('class'=>'nroDireccion')) ?>

<?php echo $form['depto']->renderLabel("Dpto:") ?>
<?php echo $form['depto']->renderError() ?>
<?php echo $form['depto']->render(array('class'=>'nroDireccion')) ?>



<?php echo $form['localidad_id']->renderLabel("Localidad:") ?>
<?php echo $form['localidad_id']->renderError() ?>
<?php echo $form['localidad_id'] ?>
            
<?php echo $form['reparticion_id']->renderLabel("Repartici&oacute;n:") ?>
<?php echo $form['reparticion_id']->renderError() ?>
<?php echo $form['reparticion_id'] ?>
        
<?php echo $form['fechaingreso']->renderLabel("Fecha de Ingreso:") ?>
<?php echo $form['fechaingreso']->renderError() ?>
<?php echo $form['fechaingreso'] ?>
</div>


        




<input class="btn" type="submit" value="Guardar" />        
</form>
<a class="btn" href="<?php echo url_for('afiliados/index') ?>">Volver</a>
