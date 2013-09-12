<?php
namespace Application\Form;

use Zend\Form\Fieldset;
use Zend\InputFilter\InputFilterProviderInterface;

class BusinessFieldset extends Fieldset
    implements
        InputFilterProviderInterface
{
    public function __construct()
    {
        parent::__construct('business');
    }

    public function init()
    {
        $this->add(array(
            'name' => 'name',
            'type' => 'text',
            'options' => array(
                'label' => 'Name'
            ),
            'attributes' => array(
                'required' => 'required',
                'autofocus' => 'autofocus',
            ),
        ));

        $this->add(array(
            'type' => 'LiabilityFieldset',
            #'type' => 'Application\Form\LiabilityFieldset',
            'name' => 'liability',
        ));
    }

    public function getInputFilterSpecification()
    {
        return array(
            'name' => array(
                'required' => true
            )
        );
    }
}