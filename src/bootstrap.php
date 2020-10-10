<?php


use DI\ContainerBuilder;

include "vendor/autoload.php";

$builder = new ContainerBuilder();
$builder->addDefinitions(__DIR__ . '/src/Config/di.php');
$builder->useAutowiring(true);
$builder->enableCompilation(__DIR__ . '/tmp');
$builder->writeProxiesToFile(true, __DIR__ . '/tmp/proxies');
$c = $builder->build();
