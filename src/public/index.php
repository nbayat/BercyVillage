<?php
require_once '../core/Application.php';

$app = new Application();

$app->router->get('/', function (){
    echo "hello";
});

$app->router->get('/contact', 'contact');


$app->run();