<?php
namespace Application\Form;

use Zend\Form\Form;

class CreateBusiness extends Form
{
    public function __construct()
    {
    	parent::__construct('create_business');
    }

    public function init()
    {
        $this->add(array(
            'type' => 'BusinessFieldset',
            #'type' => 'Application\Form\BusinessFieldset',
            'options' => array(
                'use_as_base_fieldset' => true
            )
        ));

        $this->add(array(
            'name' => 'submit',
        	'type' => 'submit',
        	'options' => array(
        		'primary'    => true,
        	),
            'attributes' => array(
                'value' => 'Save',
            ),
        ));
    }
}