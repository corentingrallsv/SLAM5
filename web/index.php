<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

include '..\src\controleur.php';

require __DIR__.'/../app/routes.php';

include '..\views\vue.php';


?>