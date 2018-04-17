<?php
namespace DoctrineBaseEntities\Service\Factory;

use DoctrineBaseEntities\Service\IntegrityService;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class IntegrityServiceFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new IntegrityService($serviceLocator);
    }
}