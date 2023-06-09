<?php

namespace ContainerFiskiGn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Rqj6Qk0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.rqj6Qk0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rqj6Qk0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'jwtManager' => ['services', 'lexik_jwt_authentication.jwt_manager', 'getLexikJwtAuthentication_JwtManagerService', true],
            'tokenStorageInterface' => ['privates', 'security.token_storage', 'getSecurity_TokenStorageService', false],
        ], [
            'jwtManager' => '?',
            'tokenStorageInterface' => '?',
        ]);
    }
}
