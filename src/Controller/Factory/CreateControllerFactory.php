<?php

namespace Pacificnm\MediaType\Controller\Factory;

use Zend\ServiceManager\ServiceLocatorInterface;
use Pacificnm\MediaType\Controller\CreateController;

class CreateControllerFactory
{

    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return \Pacificnm\MediaType\Controller\CreateController
     */
    public function __invoke(ServiceLocatorInterface $serviceLocator)
    {
        $realServiceLocator = $serviceLocator->getServiceLocator();

        $service = $realServiceLocator->get('Pacificnm\MediaType\Service\ServiceInterface');

        $form = $realServiceLocator->get('Pacificnm\MediaType\Form\Form');

        return new CreateController($service, $form);
    }


}

