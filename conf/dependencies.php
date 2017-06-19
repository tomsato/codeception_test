<?php

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\App;
use Slim\Container;

$container = $app->getContainer();

// 許可されないメソッドの場合は405を返す
$container['notAllowedHandler'] = function($c) {
    return function ($request, $response) use ($c) {
        return $c['response']
            ->withJson([
                'message' => 'not allowed handler'
            ], 405);
    };
};

// 存在しないパスにアクセスされた場合は404を返す
$container['notFoundHandler'] = function ($c) {
    return function ($response, $response) use ($c) {
        return $c['response']
            ->withJson([
                'message' => 'not found handler'
            ], 404);
    };
};
