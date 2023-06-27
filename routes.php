<?php

$router = new \Bramus\Router\Router();

$router->get('/', function() {
    home_view();
});

$router->get('/(vi|it|fr|de|ja|pt|fi|ar|es|ko)', function($lang) {
    home_lang_view($lang);
});

$router->get('/p/([^/]+)/([^/]+)', function($lang, $obj_id) {
    document_view($lang, $obj_id);
});

$router->run();