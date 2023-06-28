<?php


$leodb = new \MongoDB\Client("mongodb://username:password@host:port");

$database_name = 'database_name';
$collection_name = 'collection_name';
$site_metadata = [
    'vi' => [
        'title'=>'Vi HomePage Title',
        'description'=>'HomePage Description',
    ],
    'it' => [
        'title'=>'It HomePage Title',
        'description'=>'HomePage Description',
    ],
    'fr' => [
        'title'=>'Fr HomePage Title',
        'description'=>'HomePage Description',
    ],
    'de' => [
        'title'=>'De HomePage Title',
        'description'=>'HomePage Description',
    ],
    'ja' => [
        'title'=>'Ja HomePage Title',
        'description'=>'HomePage Description',
    ],
    'pt' => [
        'title'=>'Pt HomePage Title',
        'description'=>'HomePage Description',
    ],
    'fi' => [
        'title'=>'Fi HomePage Title',
        'description'=>'HomePage Description',
    ],
    'ar' => [
        'title'=>'Ar HomePage Title',
        'description'=>'HomePage Description',
    ],
    'es' => [
        'title'=>'Es HomePage Title',
        'description'=>'HomePage Description',
    ],
    'ko' => [
        'title'=>'Ko HomePage Title',
        'description'=>'HomePage Description',
    ],
];


if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
    // HTTPS request
    $scheme = 'https';
} else {
    // HTTP request
    $scheme = 'http';
}

$site_url = $scheme.'://'.$_SERVER['HTTP_HOST'];

$site_info = [
    'metadata' => $site_metadata,
    'site_url' => $site_url,
    'site_name' => 'VanChuyenQT',
];