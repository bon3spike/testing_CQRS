<?php

namespace ContainerHaa1esI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCallBackControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CallBackController' shared autowired service.
     *
     * @return \App\Controller\CallBackController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CallBackController.php';

        $container->services['App\\Controller\\CallBackController'] = $instance = new \App\Controller\CallBackController(($container->services['doctrine'] ?? $container->load('getDoctrineService')));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\CallBackController', $container));

        return $instance;
    }
}
