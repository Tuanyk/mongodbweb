<?php


$leodb = new \MongoDB\Client("mongodb://username:password@host:port");

$database_name = 'database_name';
$collection_name = 'collection_name';

$site_metadata = [
    'vi' => [
        'title'=>'Người vận chuyển kiến thức',
        'description'=>'Truy cập phiên bản Website được viết bằng Tiếng Việt',
        'language'=>'Vietnamese',
    ],
    'it' => [
        'title'=>'Il trasportatore della conoscenza',
        'description'=>'Accedi alla versione del sito web scritta in italiano',
        'language'=>'Italian',
    ],
    'fr' => [
        'title'=>'Le porteur de connaissance',
        'description'=>'Accédez à la version du site web écrite en français',
        'language'=>'French',
    ],
    'de' => [
        'title'=>'Der Wissensüberträger',
        'description'=>'Zugriff auf die Version der Website, die in Deutsch geschrieben is',
        'language'=>'Deutsch',
    ],
    'ja' => [
        'title'=>'知識のキャリア',
        'description'=>'日本語で書かれたウェブサイトのバージョンにアクセスする',
        'language'=>'Japanese',
    ],
    'pt' => [
        'title'=>'O portador do conhecimento',
        'description'=>'Acesse a versão do site escrita em português',
        'language'=>'Portuguese',
    ],
    'fi' => [
        'title'=>'Tiedon kantaja',
        'description'=>'Pääse käsiksi suomenkieliseen verkkosivuston versioon',
        'language'=>'Finnish',
    ],
    'ar' => [
        'title'=>'حامل المعرفة',
        'description'=>'الوصول إلى نسخة الموقع المكتوبة باللغة العربية',
        'language'=>'Arabic',
    ],
    'es' => [
        'title'=>'El portador del conocimiento',
        'description'=>'Accede a la versión del sitio web escrita en español',
        'language'=>'Spanish',
    ],
    'ko' => [
        'title'=>'지식을 전달하는 사람',
        'description'=>'한국어로 작성된 웹사이트 버전에 접속하세요',
        'language'=>'Korean',
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
    'site_name' => 'VCQT',
];