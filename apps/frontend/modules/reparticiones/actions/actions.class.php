<?php

/**
 * reparticiones actions.
 *
 * @package    obraSocial
 * @subpackage reparticiones
 * @author     Your name here
 */
class reparticionesActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Reparticions = ReparticionQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ReparticionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ReparticionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Reparticion = ReparticionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Reparticion, sprintf('Object Reparticion does not exist (%s).', $request->getParameter('id')));
    $this->form = new ReparticionForm($Reparticion);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Reparticion = ReparticionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Reparticion, sprintf('Object Reparticion does not exist (%s).', $request->getParameter('id')));
    $this->form = new ReparticionForm($Reparticion);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Reparticion = ReparticionQuery::create()->findPk($request->getParameter('id'));
    $this->forward404Unless($Reparticion, sprintf('Object Reparticion does not exist (%s).', $request->getParameter('id')));
    $Reparticion->delete();

    $this->redirect('reparticiones/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Reparticion = $form->save();

      $this->redirect('reparticiones/edit?id='.$Reparticion->getId());
    }
  }
}
