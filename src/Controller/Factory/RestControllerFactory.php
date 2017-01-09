<?php

namespace Pacificnm\MediaType\Controller\Factory;

use Zend\ServiceManager\ServiceLocatorInterface;
use Pacificnm\MediaType\Controller\RestController;

class RestControllerFactory
{

    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return \Pacificnm\MediaType\Controller\RestController
     */
    public function __invoke(ServiceLocatorInterface $serviceLocator)
    {
        $realServiceLocator = $serviceLocator->getServiceLocator();

        $service = $realServiceLocator->get('Pacificnm\MediaType\Service\ServiceInterface');

        return new RestController($service);
    }


}

