<?php

require __DIR__ . '/../vendor/autoload.php';

// Instantiate the app
$settings = require __DIR__ . '/../conf/settings.php';
$app = new \Slim\App($settings);

// Set up dependencies
require __DIR__ . '/../conf/dependencies.php';

// Register routes
require __DIR__ . '/../conf/routes.php';

// Run app
$app->run();
