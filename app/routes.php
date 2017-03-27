<?php

//Retourne tous les séjours
$app->get('/', function() {

    require '../src/controleur.php';
    $sejours = getAllSejours();

    ob_start();                 // start buffering HTML output
    require '../views/vue.php';
    $view = ob_get_clean();      // assign HTML output to $view
    return $view;
});


?>