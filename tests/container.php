<?php

require __DIR__.'/../vendor/autoload.php';

use Psr\Container\ContainerInterface;
use Slim\App;
use Slim\Container;

$container = new Container([
    App::class => function (ContainerInterface $c) {
        $app = new App($c);

        // routes and middlewares here
        require __DIR__ . '/../conf/routes.php';
        return $app;
    }
]);

return $container;
