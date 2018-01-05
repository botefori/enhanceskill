<?php

namespace Dino\Play;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;

require __DIR__.'/../vendor/autoload.php';

$container = new ContainerBuilder();


$streamHandlerDefinition = new Definition('Monolog\Handler\StreamHandler');
$streamHandlerDefinition->setArguments([__DIR__.'/dino.log']);
$container->setDefinition('logger.stream_handler', $streamHandlerDefinition);

$stdOutputHandlerDefinition = new Definition('Monolog\Handler\StreamHandler');
$stdOutputHandlerDefinition->setArguments(['php://stdout']);
$container->setDefinition('logger.stdout_handler', $stdOutputHandlerDefinition);



$loggerDefinition= new Definition('Monolog\Logger');
$loggerDefinition->setArguments([
    'main',
    [new Reference('logger.stream_handler')]
]);
$loggerDefinition->addMethodCall('pushHandler', [new Reference('logger.stdout_handler')]);

$loggerDefinition->addMethodCall('debug', [
    'The logger just got started'
]);

$container->setDefinition('logger', $loggerDefinition);


runApp($container);


function runApp(ContainerBuilder $container)
{
    $container->get('logger')->info('ROOOOOOOOAR');
}