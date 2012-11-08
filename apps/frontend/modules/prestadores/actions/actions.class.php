<?php

/**
 * prestadores actions.
 *
 * @package    obraSocial
 * @subpackage prestadores
 * @author     Your name here
 */
class prestadoresActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Prestadors = PrestadorQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PrestadorForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PrestadorForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Prestador = PrestadorQuery::create()->findPk($request->getParameter('codigo'));
    $this->forward404Unless($Prestador, sprintf('Object Prestador does not exist (%s).', $request->getParameter('codigo')));
    $this->form = new PrestadorForm($Prestador);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Prestador = PrestadorQuery::create()->findPk($request->getParameter('codigo'));
    $this->forward404Unless($Prestador, sprintf('Object Prestador does not exist (%s).', $request->getParameter('codigo')));
    $this->form = new PrestadorForm($Prestador);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Prestador = PrestadorQuery::create()->findPk($request->getParameter('codigo'));
    $this->forward404Unless($Prestador, sprintf('Object Prestador does not exist (%s).', $request->getParameter('codigo')));
    $Prestador->delete();

    $this->redirect('prestadores/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Prestador = $form->save();

      $this->redirect('prestadores/edit?codigo='.$Prestador->getCodigo());
    }
  }
}
