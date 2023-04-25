<?php

namespace ContainerFiskiGn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getQuery_Bus_Middleware_SendMessageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'query.bus.middleware.send_message' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\SendMessageMiddleware
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/SendMessageMiddleware.php';

        $container->privates['query.bus.middleware.send_message'] = $instance = new \Symfony\Component\Messenger\Middleware\SendMessageMiddleware(($container->privates['messenger.senders_locator'] ?? $container->load('getMessenger_SendersLocatorService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()), true);

        $instance->setLogger(($container->privates['logger'] ?? $container->getLoggerService()));

        return $instance;
    }
}
