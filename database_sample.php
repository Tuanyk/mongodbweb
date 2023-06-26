<?php


$leodb = new \MongoDB\Client("mongodb://username:password@host:port");

$database_name = 'database_name';
$collection_name = 'collection_name';
$site = [
    'localhost:8093' => [
        'lang'=>'en_vi',
        'title'=>'HomePage Title',
        'description'=>'HomePage Description',

    ],
];

$site_lang = $site[$_SERVER['HTTP_HOST']]['lang'];
$site_title = $site[$_SERVER['HTTP_HOST']]['title'];
$site_desc = $site[$_SERVER['HTTP_HOST']]['description'];