<?php

namespace Container3upfSg8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WUi70DcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wUi70Dc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wUi70Dc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'integration' => ['privates', 'App\\Integration\\CryptoCompare', 'getCryptoCompareService', true],
        ], [
            'integration' => 'App\\Integration\\CryptoCompare',
        ]);
    }
}
