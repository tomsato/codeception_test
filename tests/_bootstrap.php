<?php

require __DIR__.'/../vendor/autoload.php';
$kernel = \AspectMock\Kernel::getInstance();
$kernel->init([
    'debug' => true,
    'includePaths' => [__DIR__.'/../src'],
    'cacheDir' => __DIR__.'/cache/AspectMock',
]);
