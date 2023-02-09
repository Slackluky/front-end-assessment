<?php

declare(strict_types=1);

$app->get('/', 'App\Controller\Home:getHelp');
$app->get('/status', 'App\Controller\Home:getStatus');
$app->get('/products', App\Controller\Products\GetAll::class);
$app->post('/products', App\Controller\Products\Create::class);
$app->get('/products/{id}', App\Controller\Products\GetOne::class);
$app->put('/products/{id}', App\Controller\Products\Update::class);
$app->delete('/products/{id}', App\Controller\Products\Delete::class);
