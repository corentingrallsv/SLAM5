<?php


$app->get('/ping', function() use ($app) {
    return 'ping';
});

$app->get('/hello', function() use ($app) {
    return 'Hello world';
});

$app->get('/hello/{name}', function ($name) use ($app) {
    return 'Hello ' . $app->escape($name);
});

//Retourne tous les séjours
$app->get('/', function() use ($app)  {
    $sejours = $app['dao.sejour']->getAllSejours();

    return $app['twig']->render('index.html.twig', array('sejours' => $sejours));
});