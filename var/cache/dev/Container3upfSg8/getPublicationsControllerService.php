<?php

namespace Container3upfSg8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPublicationsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PublicationsController' shared autowired service.
     *
     * @return \App\Controller\PublicationsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PublicationsController.php';

        $container->services['App\\Controller\\PublicationsController'] = $instance = new \App\Controller\PublicationsController(($container->services['doctrine'] ?? $container->load('getDoctrineService')));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\PublicationsController', $container));

        return $instance;
    }
}
