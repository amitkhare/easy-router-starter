<?php


// #######################################################
// ################### TWIG VIEW #########################
// #######################################################

$loader = new Twig_Loader_Filesystem(__DIR__.'/../resources/views');
$twig = new Twig_Environment($loader, array(
    'cache' => false,//'/storage/twig/cache',
));

$twig->addGlobal("baseURL", $container['settings']['app']['basepath']);

$container['view'] = $twig;

// #######################################################
// ################### DATABASE ##########################
// #######################################################

$config = $container['settings']['database'];

$capsule = new Illuminate\Database\Capsule\Manager;

$capsule->addConnection(array_merge($config,[
 	"charset" => "utf8",
 	"collation" => "utf8_unicode_ci"
]));

 $capsule->bootEloquent();
 $capsule->setAsGlobal();

$container['db'] = $capsule;


// #######################################################
// ################### Return Container ##################
// #######################################################
return $container;