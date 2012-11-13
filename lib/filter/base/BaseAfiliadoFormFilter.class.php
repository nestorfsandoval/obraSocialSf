<?php

/**
 * Afiliado filter form base class.
 *
 * @package    obraSocial
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseAfiliadoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nro_doc'        => new sfWidgetFormFilterInput(),
      'apenombre'      => new sfWidgetFormFilterInput(),
      'sexo'           => new sfWidgetFormFilterInput(),
      'fechanac'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'estadocivil'    => new sfWidgetFormFilterInput(),
      'calle'          => new sfWidgetFormFilterInput(),
      'altura'         => new sfWidgetFormFilterInput(),
      'piso'           => new sfWidgetFormFilterInput(),
      'depto'          => new sfWidgetFormFilterInput(),
      'fechaingreso'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'nro_doc'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'apenombre'      => new sfValidatorPass(array('required' => false)),
      'sexo'           => new sfValidatorPass(array('required' => false)),
      'fechanac'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'estadocivil'    => new sfValidatorPass(array('required' => false)),
      'calle'          => new sfValidatorPass(array('required' => false)),
      'altura'         => new sfValidatorPass(array('required' => false)),
      'piso'           => new sfValidatorPass(array('required' => false)),
      'depto'          => new sfValidatorPass(array('required' => false)),
      'fechaingreso'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('afiliado_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Afiliado';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'nro_doc'        => 'Number',
      'apenombre'      => 'Text',
      'sexo'           => 'Text',
      'fechanac'       => 'Date',
      'estadocivil'    => 'Text',
      'calle'          => 'Text',
      'altura'         => 'Text',
      'piso'           => 'Text',
      'depto'          => 'Text',
      'plan_id'        => 'ForeignKey',
      'tipodoc_id'     => 'ForeignKey',
      'reparticion_id' => 'ForeignKey',
      'localidad_id'   => 'ForeignKey',
      'fechaingreso'   => 'Date',
    );
  }
}
