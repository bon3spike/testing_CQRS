<?php

namespace ContainerFiskiGn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_U1DotUVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.u1DotUV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.u1DotUV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'address' => ['privates', 'App\\Generator\\AddressGenerator', 'getAddressGeneratorService', true],
            'mail' => ['privates', 'App\\Generator\\Mail', 'getMailService', true],
        ], [
            'address' => 'App\\Generator\\AddressGenerator',
            'mail' => 'App\\Generator\\Mail',
        ]);
    }
}
