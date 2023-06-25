<?php

function home_view() {    
    global $leodb, $database_name, $collection_name, $site_lang;
    $collection = $leodb->selectDatabase($database_name)->selectCollection($collection_name);
    $documents = $collection->find(["translated_html_$site_lang" => ['$exists'=> true,'$ne'=>'']], ['limit'=>10]);
    include __DIR__.'/view/home.php';

}

function category_view(string $category) {
    global $leodb, $database_name, $collection_name;
    $collection = $leodb->selectDatabase($database_name)->selectCollection($collection_name);
    $documents = $collection->find();
    include __DIR__.'/view/category.php';
}

function document_view(string $slug) {
    global $leodb, $database_name, $collection_name, $site_lang;
    $collection = $leodb->selectDatabase($database_name)->selectCollection($collection_name);
    $document = $collection->findOne(['slug'=>$slug]);
    $field_names = array_keys((array) $document);
    include __DIR__.'/view/document.php';
    
}