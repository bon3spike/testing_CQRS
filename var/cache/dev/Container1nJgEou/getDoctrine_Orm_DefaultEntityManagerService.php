<?php

namespace Container1nJgEou;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_DefaultEntityManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    public static function do($container, $lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $container->services['doctrine.orm.default_entity_manager'] = $container->createProxy('EntityManagerGhost51e8656', fn () => \EntityManagerGhost51e8656::createLazyGhost(fn ($proxy) => self::do($container, $proxy)));
        }

        include_once \dirname(__DIR__, 4).'/vendor/doctrine/common/src/Proxy/Autoloader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Proxy/Autoloader.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/src/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Configuration.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/ArrayAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/Mapping/Driver/MappingDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/MappingDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/Mapping/Driver/MappingDriverChain.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/NamingStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/UnderscoreNamingStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/QuoteStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Internal/SQLResultCasing.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/DefaultQuoteStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/EntityListenerResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/EntityListenerServiceResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Mapping/ContainerEntityListenerResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Repository/RepositoryFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ContainerRepositoryFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/ManagerConfigurator.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/CompatibilityAnnotationDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/Mapping/Driver/ColocatedMappingDriver.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AttributeDriver.php';

        $a = new \Doctrine\ORM\Configuration();

        $b = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();
        $b->addDriver(($container->privates['doctrine.orm.default_attribute_metadata_driver'] ??= new \Doctrine\ORM\Mapping\Driver\AttributeDriver([0 => (\dirname(__DIR__, 4).'/src/Entity')])), 'App\\Entity');

        $a->setEntityNamespaces(['App' => 'App\\Entity']);
        $a->setMetadataCache(new \Symfony\Component\Cache\Adapter\ArrayAdapter());
        $a->setQueryCache(($container->privates['cache.doctrine.orm.default.query'] ??= new \Symfony\Component\Cache\Adapter\ArrayAdapter()));
        $a->setResultCache(($container->privates['cache.doctrine.orm.default.result'] ??= new \Symfony\Component\Cache\Adapter\ArrayAdapter()));
        $a->setMetadataDriverImpl(new \Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver($b, new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine.ulid_generator' => ['privates', 'doctrine.ulid_generator', 'getDoctrine_UlidGeneratorService', true],
            'doctrine.uuid_generator' => ['privates', 'doctrine.uuid_generator', 'getDoctrine_UuidGeneratorService', true],
        ], [
            'doctrine.ulid_generator' => '?',
            'doctrine.uuid_generator' => '?',
        ])));
        $a->setProxyDir(($container->targetDir.''.'/doctrine/orm/Proxies'));
        $a->setProxyNamespace('Proxies');
        $a->setAutoGenerateProxyClasses(true);
        $a->setSchemaIgnoreClasses([]);
        $a->setClassMetadataFactoryName('Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ClassMetadataFactory');
        $a->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $a->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true));
        $a->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $a->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($container));
        $a->setLazyGhostObjectEnabled(true);
        $a->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Repository\\AddressMixingRepository' => ['privates', 'App\\Repository\\AddressMixingRepository', 'getAddressMixingRepositoryService', true],
            'App\\Repository\\AddressRepository' => ['privates', 'App\\Repository\\AddressRepository', 'getAddressRepositoryService', true],
            'App\\Repository\\AdminRepository' => ['privates', 'App\\Repository\\AdminRepository', 'getAdminRepositoryService', true],
            'App\\Repository\\CertificateRepository' => ['privates', 'App\\Repository\\CertificateRepository', 'getCertificateRepositoryService', true],
            'App\\Repository\\CommissionRepository' => ['privates', 'App\\Repository\\CommissionRepository', 'getCommissionRepositoryService', true],
            'App\\Repository\\CurrencyRepository' => ['privates', 'App\\Repository\\CurrencyRepository', 'getCurrencyRepositoryService', true],
            'App\\Repository\\ExOrderRepository' => ['privates', 'App\\Repository\\ExOrderRepository', 'getExOrderRepositoryService', true],
            'App\\Repository\\InputTransactionRepository' => ['privates', 'App\\Repository\\InputTransactionRepository', 'getInputTransactionRepositoryService', true],
            'App\\Repository\\MixOrderRepository' => ['privates', 'App\\Repository\\MixOrderRepository', 'getMixOrderRepositoryService', true],
            'App\\Repository\\MixingCodeRepository' => ['privates', 'App\\Repository\\MixingCodeRepository', 'getMixingCodeRepositoryService', true],
            'App\\Repository\\NotificationRepository' => ['privates', 'App\\Repository\\NotificationRepository', 'getNotificationRepositoryService', true],
            'App\\Repository\\OutputTransactionRepository' => ['privates', 'App\\Repository\\OutputTransactionRepository', 'getOutputTransactionRepositoryService', true],
            'App\\Repository\\PublicationRepository' => ['privates', 'App\\Repository\\PublicationRepository', 'getPublicationRepositoryService', true],
            'App\\Repository\\StatisticsRepository' => ['privates', 'App\\Repository\\StatisticsRepository', 'getStatisticsRepositoryService', true],
            'App\\Repository\\TicketRepository' => ['privates', 'App\\Repository\\TicketRepository', 'getTicketRepositoryService', true],
            'App\\Repository\\WalletsRepository' => ['privates', 'App\\Repository\\WalletsRepository', 'getWalletsRepositoryService', true],
        ], [
            'App\\Repository\\AddressMixingRepository' => '?',
            'App\\Repository\\AddressRepository' => '?',
            'App\\Repository\\AdminRepository' => '?',
            'App\\Repository\\CertificateRepository' => '?',
            'App\\Repository\\CommissionRepository' => '?',
            'App\\Repository\\CurrencyRepository' => '?',
            'App\\Repository\\ExOrderRepository' => '?',
            'App\\Repository\\InputTransactionRepository' => '?',
            'App\\Repository\\MixOrderRepository' => '?',
            'App\\Repository\\MixingCodeRepository' => '?',
            'App\\Repository\\NotificationRepository' => '?',
            'App\\Repository\\OutputTransactionRepository' => '?',
            'App\\Repository\\PublicationRepository' => '?',
            'App\\Repository\\StatisticsRepository' => '?',
            'App\\Repository\\TicketRepository' => '?',
            'App\\Repository\\WalletsRepository' => '?',
        ])));

        $instance = ($lazyLoad->__construct(($container->services['doctrine.dbal.default_connection'] ?? $container->load('getDoctrine_Dbal_DefaultConnectionService')), $a) && false ?: $lazyLoad);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }
}
