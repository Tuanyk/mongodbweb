<?php

$router = new \Bramus\Router\Router();

$router->get('/', function() {
    home_view();
});

$router->run();