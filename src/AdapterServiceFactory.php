<?php

namespace SphinxSearch;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use SphinxClient;

class AdapterServiceFactory implements FactoryInterface
{

    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Configuration');
        $params = $config['sphinxapi'];
        $client = new SphinxClient();
        $client->setServer($params['server'], $params['port']);

        return $client;
    }
} 