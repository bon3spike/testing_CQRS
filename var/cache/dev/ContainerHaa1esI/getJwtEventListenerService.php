<?php

namespace ContainerHaa1esI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJwtEventListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'jwt_event_listener' shared autowired service.
     *
     * @return \App\Event\JWTCreatedListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Event/JWTCreatedListener.php';

        return $container->privates['jwt_event_listener'] = new \App\Event\JWTCreatedListener(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->services['doctrine'] ?? $container->load('getDoctrineService')));
    }
}
