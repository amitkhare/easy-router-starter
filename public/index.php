<?php
function dd($data){
    print_r($data);
    die;
};
error_reporting(E_ALL);
ini_set('display_errors', 1 );
// autoload via composer

require __DIR__.'/../vendor/autoload.php';


require __DIR__.'/../bootstrap/start.php';


// Dispatch Routes.
$app->dispatch();