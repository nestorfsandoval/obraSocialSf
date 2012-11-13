<?php

/**
 * Afiliado form.
 *
 * @package    obraSocial
 * @subpackage form
 * @author     Your name here
 */
class AfiliadoForm extends BaseAfiliadoForm
{
  public function configure()
  {
      parent::configure();
      
      $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'nro_doc'        => new sfWidgetFormInputText(),
      'apenombre'      => new sfWidgetFormInputText(),
      'sexo'           => new sfWidgetFormChoice(array('expanded' => false,'choices'  => array('Masculino', 'Femenino'))),
      'fechanac'       => new sfWidgetFormInputText(),
      'estadocivil'    => new sfWidgetFormChoice(array('expanded' => false,'choices'  => array('Soltero', 'Casado'))),
      'calle'          => new sfWidgetFormInputText(),
      'altura'         => new sfWidgetFormInputText(),
      'piso'           => new sfWidgetFormInputText(),
      'depto'          => new sfWidgetFormInputText(),
      'plan_id'        => new sfWidgetFormPropelChoice(array('model' => 'Plan', 'add_empty' => false)),
      'tipodoc_id'     => new sfWidgetFormPropelChoice(array('model' => 'Tipodoc', 'add_empty' => false)),
      'reparticion_id' => new sfWidgetFormPropelChoice(array('model' => 'Reparticion', 'add_empty' => false)),
      'localidad_id'   => new sfWidgetFormPropelChoice(array('model' => 'Localidad', 'add_empty' => false)),
      'fechaingreso'   => new sfWidgetFormInputText(),
       ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nro_doc'        => new sfValidatorInteger(array('min' => 0, 'max' => 2147483647, 'required' => false)),
      'apenombre'      => new sfValidatorString(array('max_length' => 100, 'required' => true),array('required'=>'Debe ingresar un nombre')),
      'sexo'           => new sfValidatorString(array('required' => false)),
      'fechanac'       => new sfValidatorDate(array('required' => false)),
      'estadocivil'    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'calle'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'altura'         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'piso'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'depto'          => new sfValidatorString(array('required' => false)),
      'plan_id'        => new sfValidatorPropelChoice(array('model' => 'Plan', 'column' => 'id')),
      'tipodoc_id'     => new sfValidatorPropelChoice(array('model' => 'Tipodoc', 'column' => 'id')),
      'reparticion_id' => new sfValidatorPropelChoice(array('model' => 'Reparticion', 'column' => 'id')),
      'localidad_id'   => new sfValidatorPropelChoice(array('model' => 'Localidad', 'column' => 'id')),
      'fechaingreso'   => new sfValidatorDate(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Afiliado', 'column' => array('nro_doc')))
    );

    $this->widgetSchema->setNameFormat('afiliado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

  }
}
