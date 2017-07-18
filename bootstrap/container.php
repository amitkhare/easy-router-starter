<?php

$container['settings'] = require __DIR__ . '/settings.php';

$loader = new Twig_Loader_Filesystem(__DIR__.'/../resources/views');
$twig = new Twig_Environment($loader, array(
    'cache' => false,//'/storage/twig/cache',
));

$container['view'] = $twig;


$config = $container['settings']['database'];

$capsule = new Illuminate\Database\Capsule\Manager;

$capsule->addConnection(array_merge($config,[
 	"charset" => "utf8",
 	"collation" => "utf8_unicode_ci"
]));

 $capsule->bootEloquent();
 $capsule->setAsGlobal();

$container['db'] = $capsule;




return $container;