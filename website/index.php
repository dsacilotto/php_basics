<?php

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->get('/', function () {
    echo "Hello World!";
});

$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});

$app->run();

?>