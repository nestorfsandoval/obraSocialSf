<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('prestadores/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?codigo='.$form->getObject()->getCodigo() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('prestadores/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'prestadores/delete?codigo='.$form->getObject()->getCodigo(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['nombre']->renderLabel() ?></th>
        <td>
          <?php echo $form['nombre']->renderError() ?>
          <?php echo $form['nombre'] ?>
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
        <th><?php echo $form['numero']->renderLabel() ?></th>
        <td>
          <?php echo $form['numero']->renderError() ?>
          <?php echo $form['numero'] ?>
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
        <th><?php echo $form['codigo_especialidad']->renderLabel() ?></th>
        <td>
          <?php echo $form['codigo_especialidad']->renderError() ?>
          <?php echo $form['codigo_especialidad'] ?>
        </td>
      </tr>

      <tr>
        <th><?php echo $form['prestador_has_centroatencion_list']->renderLabel() ?></th>
        <td>
          <?php echo $form['prestador_has_centroatencion_list']->renderError() ?>
          <?php echo $form['prestador_has_centroatencion_list'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
