<?php

use App\Controllers\PageController;

$app->get('/', [PageController::class,"home"])->setName('home');
