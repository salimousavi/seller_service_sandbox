<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\Lib\Cache\ApcuCacheStorage;
use App\Lib\Resolver\ApiRequestResolver;
use App\Service\CacheService;

return function(ContainerConfigurator $containerConfigurator) {
    $services = $containerConfigurator->services()
        ->defaults()
        ->autowire()      // Automatically injects dependencies in your services.
        ->autoconfigure() // Automatically registers your services as commands, event subscribers, etc.
    ;

    $services->load('App\\', '../src/')
        ->exclude('../src/{DependencyInjection,Entity,Kernel.php}');


    // Controller Argument Resolvers
    $services->set(ApiRequestResolver::class)->tag('controller.argument_value_resolver');

    // Cache
    $services->set(CacheService::class)->args([service(ApcuCacheStorage::class)]);

//    // Rate Limiter
//    if ($containerConfigurator->env() == Constant::APP_ENV_DEVELOPMENT) {
//        $services->set(StorageInterface::class, ApcuStorage::class);
//    } else {
//        $services->set(StorageInterface::class, InMemoryStorage::class);
//    }
//
//    // ErrorLogger
//    $services->set(ErrorLoggerInterface::class, DatabaseErrorLogger::class);
//    $services->set(ErrorLogService::class)->args([service(ErrorLoggerInterface::class)]);
};