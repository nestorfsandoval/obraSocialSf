<?php

/**
 * abmafiliado actions.
 *
 * @package    obraSocial
 * @subpackage abmafiliado
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class abmafiliadoActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
     $this->localidady= array(1=>'Rawson',2=>'Trelew',3=>'conecticut');
   // $this->forward('default', 'module');
  }
}
