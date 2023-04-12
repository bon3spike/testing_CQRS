<?php

namespace Container1nJgEou;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_Security_Firewall_Authenticator_ApiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.security.firewall.authenticator.api' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/Debug/TraceableAuthenticatorManagerListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AuthenticatorManagerListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticatorManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/UserAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticatorManager.php';

        $a = ($container->privates['security.authenticator.jwt.api'] ?? $container->load('getSecurity_Authenticator_Jwt_ApiService'));

        if (isset($container->privates['debug.security.firewall.authenticator.api'])) {
            return $container->privates['debug.security.firewall.authenticator.api'];
        }

        return $container->privates['debug.security.firewall.authenticator.api'] = new \Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener(new \Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener(new \Symfony\Component\Security\Http\Authentication\AuthenticatorManager([0 => $a], ($container->privates['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->privates['security.event_dispatcher.api'] ?? $container->load('getSecurity_EventDispatcher_ApiService')), 'api', ($container->privates['logger'] ?? $container->getLoggerService()), true, true, [])));
    }
}
