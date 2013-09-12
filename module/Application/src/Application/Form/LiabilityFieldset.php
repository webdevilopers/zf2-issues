<?php
namespace Application\Form;

use Zend\Form\Fieldset;
use Zend\InputFilter\InputFilterProviderInterface;

class LiabilityFieldset extends Fieldset
	implements
		InputFilterProviderInterface // memory size exhausted
{
	public function __construct()
	{
		parent::__construct('liability');
			$this->add(array(
				'name' => 'capitalStock',
				'type' => 'text',
				'options' => array(
					'label' => 'capital stock'
				),
				'attributes' => array(
					'required' => 'required',
				)
			));

	}

	public function _init()
	{
			$this->add(array(
				'name' => 'capitalStock',
				'type' => 'text',
				'options' => array(
					'label' => 'Stammkapital'
				),
				'attributes' => array(
					'required' => 'required',
				)
			));
	}

	public function getInputFilterSpecification()
	{
		return array(
			'capitalStock' => array(
				'required' => true,
				#'allow_empty' => true,
// 				'validators' => array(
// 					array(
// 						'name' => 'Float'
// 					)
// 				)
			)
		);
	}
}