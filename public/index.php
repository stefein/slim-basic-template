<?php
use \DI\Bridge\Slim\Bridge;
use \DI\ContainerBuilder as Builder;

require_once __DIR__ . '/../vendor/autoload.php';

$builder = new Builder();
$container = $builder->build();
$app = Bridge::create($container);
$app->addErrorMiddleware(true, false, false);
var_dump($app);die;
