<?php

use AmitKhare\EasyRouter;

try {
    (new Dotenv\Dotenv(__DIR__ . '/../'))->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
    //
}

$container = require __DIR__.'/container.php';

// Take an instance of Router Class.

$app = new EasyRouter($container,$container['settings']['app']['basepath']);

$container['view']->addGlobal("baseURL", $container['settings']['app']['basepath']);

require __DIR__.'/../app/Routes/routes.web.php';


