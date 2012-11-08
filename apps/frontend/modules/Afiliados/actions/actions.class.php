<?php

/**
 * Afiliados actions.
 *
 * @package    obraSocial
 * @subpackage Afiliados
 * @author     Your name here
 */
class AfiliadosActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->afiliados = afiliadoQuery::create()->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new afiliadoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new afiliadoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $afiliado = afiliadoQuery::create()->findPk($request->getParameter('tipo_doc'),
                           $request->getParameter('nro_doc'));
    $this->forward404Unless($afiliado, sprintf('Object afiliado does not exist (%s).', $request->getParameter('tipo_doc'),
                           $request->getParameter('nro_doc')));
    $this->form = new afiliadoForm($afiliado);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $afiliado = afiliadoQuery::create()->findPk($request->getParameter('tipo_doc'),
                           $request->getParameter('nro_doc'));
    $this->forward404Unless($afiliado, sprintf('Object afiliado does not exist (%s).', $request->getParameter('tipo_doc'),
                           $request->getParameter('nro_doc')));
    $this->form = new afiliadoForm($afiliado);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $afiliado = afiliadoQuery::create()->findPk($request->getParameter('tipo_doc'),
                           $request->getParameter('nro_doc'));
    $this->forward404Unless($afiliado, sprintf('Object afiliado does not exist (%s).', $request->getParameter('tipo_doc'),
                           $request->getParameter('nro_doc')));
    $afiliado->delete();

    $this->redirect('Afiliados/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $afiliado = $form->save();

      $this->redirect('Afiliados/edit?tipo_doc='.$afiliado->getTipoDoc().'&nro_doc='.$afiliado->getNroDoc());
    }
  }
}
