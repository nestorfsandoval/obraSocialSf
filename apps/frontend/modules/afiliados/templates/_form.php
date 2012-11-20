<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form class="abm" action="<?php echo url_for('afiliados/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  
<?php echo $form->renderHiddenFields(false) ?>

        
<?php echo $form->renderGlobalErrors() ?>
<div id="afiliadoIzquierda">
    <fieldset>
        <legend>Datos Personales</legend>
    
    <div class="campo">
        <?php echo $form['apenombre']->renderLabel("Nombre y Apellido:") ?>        
        <?php echo $form['apenombre'] ?>
        <?php echo $form['apenombre']->renderError() ?>
    </div>
    <div class="campo">
    <label>Documento:</label>
        <?php echo $form['tipodoc_id']->renderError() ?>
        <?php echo $form['tipodoc_id']->render(array('class'=>'tipoDoc')) ?>
        <?php echo $form['nro_doc']->render(array('class'=>'nroDoc','placeholder'=>'Ingrese su n&ordm; de Doc.')) ?>
        <?php echo $form['nro_doc']->renderError() ?>
    </div>
    <div class="campo">
        <?php echo $form['fechanac']->renderLabel("Fecha de Nacimiento:") ?>
        <?php echo $form['fechanac']->renderError() ?>
        <?php echo $form['fechanac'] ?>
    </div>
    <div class="campo">
        <?php echo $form['sexo']->renderLabel("Sexo:") ?>
        <?php echo $form['sexo']->renderError() ?>
        <?php echo $form['sexo'] ?>
    </div>    
    <div class="campo">
        <?php echo $form['estadocivil']->renderLabel("Estado Civil:") ?>
        <?php echo $form['estadocivil']->renderError() ?>
        <?php echo $form['estadocivil'] ?>
    </div>    
    <div class="campo">
        <?php echo $form['plan_id']->renderLabel("Plan:") ?>
        <?php echo $form['plan_id']->renderError() ?>
        <?php echo $form['plan_id'] ?>    
    </div>
        </fieldset>
</div>
<div id="afiliadoDerecha">
    <div class="direccion">
        <fieldset>
        <legend>Direcci&oacute;n</legend>
        <div class="campo">
        <?php echo $form['calle']->renderLabel("Calle:") ?>
        <?php echo $form['calle']->renderError() ?>
        <?php echo $form['calle']?>
        </div>
        <div class="num-piso-dpto">
        <?php //echo $form['altura']->renderLabel("Nro.:") ?>
            <div class="tit">N&ordm;</div>
        <?php echo $form['altura']->renderError();?>
        <?php echo $form['altura']->render(array('class'=>'nroDireccion')) ?>
            <div class="tit">Piso</div>
        <?php //echo $form['piso']->renderLabel("Piso:") ?>
        <?php echo $form['piso']->renderError() ?>
        <?php echo $form['piso']->render(array('class'=>'nroDireccion')) ?>
            <div class="tit">Dpto</div>
        <?php //echo $form['depto']->renderLabel("Dpto:") ?>
        <?php echo $form['depto']->renderError() ?>
        <?php echo $form['depto']->render(array('class'=>'nroDireccion')) ?>
        </div>
        <div class="campo">
        <?php echo $form['localidad_id']->renderLabel("Localidad:") ?>
        <?php echo $form['localidad_id']->renderError() ?>
        <?php echo $form['localidad_id'] ?>
        </div>    
        </fieldset>
    </div>
    <fieldset>
        <legend>Datos Laborales</legend>
        <div class="campo">
            <?php echo $form['reparticion_id']->renderLabel("Repartici&oacute;n:") ?>
            <?php echo $form['reparticion_id']->renderError() ?>
            <?php echo $form['reparticion_id'] ?>
        </div>
        <div class="campo">
            <?php echo $form['fechaingreso']->renderLabel("Fecha de Ingreso:") ?>
            <?php echo $form['fechaingreso']->renderError() ?>
            <?php echo $form['fechaingreso'] ?>    
        </div>
        </fieldset>
</div>


        




<input class="btn" type="submit" value="Guardar" />        
</form>
<a class="btn" href="<?php echo url_for('afiliados/index') ?>">Volver</a>
