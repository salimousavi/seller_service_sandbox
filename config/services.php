<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use App\Lib\Resolver\ApiRequestResolver;

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
};