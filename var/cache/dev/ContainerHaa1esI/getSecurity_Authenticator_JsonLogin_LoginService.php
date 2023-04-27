<?php

namespace ContainerHaa1esI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_JsonLogin_LoginService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.json_login.login' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\JsonLoginAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/InteractiveAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authenticator/JsonLoginAuthenticator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationSuccessHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/CustomAuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Security/Http/Authentication/AuthenticationSuccessHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/AuthenticationFailureHandlerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authentication/CustomAuthenticationFailureHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Security/Http/Authentication/AuthenticationFailureHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-access/PropertyAccessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-access/PropertyAccessor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/ArrayAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyListExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyTypeExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyAccessExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyInitializableExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyReadInfoExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/PropertyWriteInfoExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/Extractor/ConstructorArgumentTypeExtractorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/property-info/Extractor/ReflectionExtractor.php';

        $a = ($container->services['lexik_jwt_authentication.jwt_manager'] ?? $container->load('getLexikJwtAuthentication_JwtManagerService'));

        if (isset($container->privates['security.authenticator.json_login.login'])) {
            return $container->privates['security.authenticator.json_login.login'];
        }
        $b = ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService());

        if (isset($container->privates['security.authenticator.json_login.login'])) {
            return $container->privates['security.authenticator.json_login.login'];
        }
        $c = ($container->services['translator'] ?? $container->load('getTranslatorService'));
        $d = ($container->privates['property_info.reflection_extractor'] ??= new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor());

        $container->privates['security.authenticator.json_login.login'] = $instance = new \Symfony\Component\Security\Http\Authenticator\JsonLoginAuthenticator(($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), ($container->privates['security.user.provider.concrete.app_user_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserProviderService')), new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler(new \Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationSuccessHandler($a, $b, [], true), [], 'login'), new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler(new \Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationFailureHandler($b, $c), []), ['check_path' => '/api/login_check', 'use_forward' => false, 'require_previous_session' => false, 'login_path' => '/login', 'username_path' => 'username', 'password_path' => 'password'], new \Symfony\Component\PropertyAccess\PropertyAccessor(3, 2, new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false), $d, $d));

        if ($container->has('translator')) {
            $instance->setTranslator($c);
        }

        return $instance;
    }
}
