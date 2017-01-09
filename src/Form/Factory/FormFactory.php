<?php

namespace Pacificnm\MediaType\Form\Factory;

use Zend\ServiceManager\ServiceLocatorInterface;
use Pacificnm\MediaType\Form\Form;

class FormFactory
{

    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return \MediaType\Form\Form
     */
    public function __invoke(ServiceLocatorInterface $serviceLocator)
    {
        return new Form();
    }


}

