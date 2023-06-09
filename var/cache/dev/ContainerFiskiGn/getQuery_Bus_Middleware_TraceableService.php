<?php

namespace ContainerFiskiGn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getQuery_Bus_Middleware_TraceableService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'query.bus.middleware.traceable' shared service.
     *
     * @return \Symfony\Component\Messenger\Middleware\TraceableMiddleware
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/MiddlewareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Middleware/TraceableMiddleware.php';

        return $container->privates['query.bus.middleware.traceable'] = new \Symfony\Component\Messenger\Middleware\TraceableMiddleware(($container->privates['debug.stopwatch'] ??= new \Symfony\Component\Stopwatch\Stopwatch(true)), 'query.bus');
    }
}
