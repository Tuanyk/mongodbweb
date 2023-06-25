<?php


$leodb = new \MongoDB\Client("mongodb://username:password@host:port");

$database_name = 'database_name';
$collection_name = 'collection_name';
$site = [
    'localhost:8093' => 'en_vi',
];

$site_lang = $site[$_SERVER['HTTP_HOST']];