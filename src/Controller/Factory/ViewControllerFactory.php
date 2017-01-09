<?php

namespace Pacificnm\MediaType\Controller\Factory;

use Zend\ServiceManager\ServiceLocatorInterface;
use Pacificnm\MediaType\Controller\ViewController;

class ViewControllerFactory
{

    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return \Pacificnm\MediaType\Controller\ViewController
     */
    public function __invoke(ServiceLocatorInterface $serviceLocator)
    {
        $realServiceLocator = $serviceLocator->getServiceLocator();

        $service = $realServiceLocator->get('Pacificnm\MediaType\Service\ServiceInterface');

        return new ViewController($service);
    }


}

