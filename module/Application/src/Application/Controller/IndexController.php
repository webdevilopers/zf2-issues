<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

	public function createAction()
	{
		$formManager = $this->serviceLocator->get('FormElementManager');
		$form    = $formManager->get('CreateBusiness');

		$request = $this->getRequest();
		if ($request->isPost()) {
			$post = $request->getPost();
			#$post = $request->getQuery();
			$form->setData($post);

			if ($form->isValid()) {
				echo "valid";
				exit;
			} else {
				echo "invalid";
				var_dump($form->getMessages());
				exit;
			}
		}

		return new ViewModel(array('form' => $form));
	}
}
