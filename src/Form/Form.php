<?php

namespace Pacificnm\MediaType\Form;

use Zend\Form\Form as ZendForm;
use Zend\InputFilter\InputFilterProviderInterface;
use Pacificnm\MediaType\Entity\Entity;
use Pacificnm\MediaType\Hydrator\Hydrator;

class Form extends ZendForm implements InputFilterProviderInterface
{

    /**
     * @param string $name
     * @param array $options
     */
    public function __construct($name = 'mediatype-form', $options = array())
    {
        parent::__construct($name, $options);

        $this->setHydrator(new Hydrator(false));

        $this->setObject(new Entity());

        // mediaTypeId
        $this->add(array(
            'name' => 'mediaTypeId',
            'type' => 'hidden',
            'attributes' => array(
                'id' => 'mediaTypeId'
            )
        ));
        
        // mediaTypeName
        $this->add(array(
            'name' => 'mediaTypeName',
            'type' => 'Text',
            'options' => array(
                'label' => 'Type Name:'
            ),
            'attributes' => array(
                'class' => 'form-control',
                'id' => 'mediaTypeName'
            )
        ));
        
        // mediaTypeActive
        $this->add(array(
            'type' => 'Checkbox',
            'name' => 'mediaTypeActive',
            'options' => array(
                'label' => 'Active',
                'use_hidden_element' => true,
                'checked_value' => '1',
                'unchecked_value' => '0'
            ),
            'attributes' => array(
                'id' => 'mediaTypeActive'
            )
        ));
        
        $this->add(array(
        	'name' => 'submit',
        	'type' => 'button',
        	'attributes' => array(
        		'value' => 'Submit',
        		'id' => 'submit',
        		'class' => 'btn btn-primary btn-flat'
        	)
        ));
    }

    /**
     * {@inheritdoc}
     *
     * @see
     * \Zend\InputFilter\InputFilterProviderInterface::getInputFilterSpecification()
     */
    public function getInputFilterSpecification()
    {
        return array();
    }


}

