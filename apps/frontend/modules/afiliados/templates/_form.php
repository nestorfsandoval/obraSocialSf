<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form class="abm" action="<?php echo url_for('afiliados/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
            &nbsp;<a class="btn" href="<?php echo url_for('afiliados/index') ?>">Volver</a>
          
            <input class="btn" type="submit" value="Guardar" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['nro_doc']->renderLabel() ?></th>
        <td>
          <?php echo $form['nro_doc']->renderError() ?>
          <?php echo $form['nro_doc'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['apenombre']->renderLabel() ?></th>
        <td>
          <?php echo $form['apenombre']->renderError() ?>
          <?php echo $form['apenombre'] ?>
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
        <th><?php echo $form['fechanac']->renderLabel() ?></th>
        <td>
          <?php echo $form['fechanac']->renderError() ?>
          <?php echo $form['fechanac'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['estadocivil']->renderLabel() ?></th>
        <td>
          <?php echo $form['estadocivil']->renderError() ?>
          <?php echo $form['estadocivil'] ?>
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
        <th><?php echo $form['plan_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['plan_id']->renderError() ?>
          <?php echo $form['plan_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['tipodoc_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['tipodoc_id']->renderError() ?>
          <?php echo $form['tipodoc_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['reparticion_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['reparticion_id']->renderError() ?>
          <?php echo $form['reparticion_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['localidad_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['localidad_id']->renderError() ?>
          <?php echo $form['localidad_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fechaingreso']->renderLabel() ?></th>
        <td>
          <?php echo $form['fechaingreso']->renderError() ?>
          <?php echo $form['fechaingreso'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
