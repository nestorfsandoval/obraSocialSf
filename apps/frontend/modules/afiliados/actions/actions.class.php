<?php

/**
 * afiliados actions.
 *
 * @package    obraSocial
 * @subpackage afiliados
 * @author     Your name here
 */
class afiliadosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $consulta = AfiliadoQuery::create();
    
    if($request->getParameter('buscaAfiliado')){
        $palabra=$request->getParameter('buscaAfiliado');
        $consulta->findByApenombre('%'.$palabra.'%');
        $consulta->_or();
        $consulta->findById('%'.$palabra.'%');
    }
    $this->Afiliados = $consulta->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AfiliadoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AfiliadoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Afiliado = AfiliadoQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Afiliado, sprintf('Object Afiliado does not exist (%s).', $request->getParameter('id')));
    $this->form = new AfiliadoForm($Afiliado);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Afiliado = AfiliadoQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Afiliado, sprintf('Object Afiliado does not exist (%s).', $request->getParameter('id')));
    $this->form = new AfiliadoForm($Afiliado);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Afiliado = AfiliadoQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Afiliado, sprintf('Object Afiliado does not exist (%s).', $request->getParameter('id')));
    $Afiliado->delete();

    $this->redirect('afiliados/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Afiliado = $form->save();

      $this->redirect('afiliados/index.php');
    }
  }
}
