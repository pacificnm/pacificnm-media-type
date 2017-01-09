<?php

namespace Pacificnm\MediaType\Service\Factory;

use Zend\ServiceManager\ServiceLocatorInterface;
use Pacificnm\MediaType\Service\Service;

class ServiceFactory
{

    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return Pacificnm\MediaType\Service\Service
     */
    public function __invoke(ServiceLocatorInterface $serviceLocator)
    {
        $mapper = $serviceLocator->get('Pacificnm\MediaType\Mapper\MysqlMapperInterface');

        return new Service($mapper);
    }


}

