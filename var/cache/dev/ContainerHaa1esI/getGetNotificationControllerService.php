<?php

namespace ContainerHaa1esI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetNotificationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\GetNotificationController' shared autowired service.
     *
     * @return \App\Controller\GetNotificationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/GetNotificationController.php';
        include_once \dirname(__DIR__, 4).'/src/Notification/Expander/NotificationDtoExpanderInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Notification/Expander/NotificationDtoExpander.php';

        $container->services['App\\Controller\\GetNotificationController'] = $instance = new \App\Controller\GetNotificationController(new \App\Notification\Expander\NotificationDtoExpander(new RewindableGenerator(function () use ($container) {
            return new \EmptyIterator();
        }, 0)));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\GetNotificationController', $container));

        return $instance;
    }
}
