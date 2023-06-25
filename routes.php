<?php

$router = new \Bramus\Router\Router();

$router->get('/', function() {
    home_view();
});

$router->get('/p/([^/]+)', function($obj_id) {
    document_view($obj_id);
});

$router->run();