<?php

$builder = new \DI\ContainerBuilder();
// $builder->enableCompilation(__DIR__ . '/tmp');
$builder->writeProxiesToFile(true, __DIR__ . '/tmp/proxies');
$builder->enableCompilation(__DIR__ . '/var/cache');
$container = $builder->build();

if (/* is production */) {
    $containerBuilder->enableCompilation(__DIR__ . '/var/cache');
}

if (/* is production */) {
    $containerBuilder->enableDefinitionCache();
}


/**
 * config
 */
$containerBuilder->addDefinitions('config.php');
return [
    // place your definitions here
];