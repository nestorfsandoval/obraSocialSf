<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('Afiliados/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?tipo_doc='.$form->getObject()->getTipoDoc().'&nro_doc='.$form->getObject()->getNroDoc() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('Afiliados/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'Afiliados/delete?tipo_doc='.$form->getObject()->getTipoDoc().'&nro_doc='.$form->getObject()->getNroDoc(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['ape_nom']->renderLabel() ?></th>
        <td>
          <?php echo $form['ape_nom']->renderError() ?>
          <?php echo $form['ape_nom'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['sexo']->renderLabel() ?></th>
        <td>
          <?php echo $form['sexo']->renderError() ?>
          <?php echo $form['sexo'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha_nac']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_nac']->renderError() ?>
          <?php echo $form['fecha_nac'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['estado_civil']->renderLabel() ?></th>
        <td>
          <?php echo $form['estado_civil']->renderError() ?>
          <?php echo $form['estado_civil'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['calle']->renderLabel() ?></th>
        <td>
          <?php echo $form['calle']->renderError() ?>
          <?php echo $form['calle'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['altura']->renderLabel() ?></th>
        <td>
          <?php echo $form['altura']->renderError() ?>
          <?php echo $form['altura'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['piso']->renderLabel() ?></th>
        <td>
          <?php echo $form['piso']->renderError() ?>
          <?php echo $form['piso'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['depto']->renderLabel() ?></th>
        <td>
          <?php echo $form['depto']->renderError() ?>
          <?php echo $form['depto'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['codigo_plan']->renderLabel() ?></th>
        <td>
          <?php echo $form['codigo_plan']->renderError() ?>
          <?php echo $form['codigo_plan'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['afiliado_tipo_doc']->renderLabel() ?></th>
        <td>
          <?php echo $form['afiliado_tipo_doc']->renderError() ?>
          <?php echo $form['afiliado_tipo_doc'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['afiliado_nro_doc']->renderLabel() ?></th>
        <td>
          <?php echo $form['afiliado_nro_doc']->renderError() ?>
          <?php echo $form['afiliado_nro_doc'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['borrado']->renderLabel() ?></th>
        <td>
          <?php echo $form['borrado']->renderError() ?>
          <?php echo $form['borrado'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['localidad']->renderLabel() ?></th>
        <td>
          <?php echo $form['localidad']->renderError() ?>
          <?php echo $form['localidad'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['telefono']->renderLabel() ?></th>
        <td>
          <?php echo $form['telefono']->renderError() ?>
          <?php echo $form['telefono'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha_in']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_in']->renderError() ?>
          <?php echo $form['fecha_in'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
