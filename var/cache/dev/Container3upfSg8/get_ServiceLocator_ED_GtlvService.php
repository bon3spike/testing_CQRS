<?php

namespace Container3upfSg8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ED_GtlvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ED.Gtlv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ED.Gtlv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'mail' => ['privates', 'App\\Generator\\Mail', 'getMailService', true],
        ], [
            'mail' => 'App\\Generator\\Mail',
        ]);
    }
}
