<?php

function home_lang_view(string $lang) {
    global $leodb, $database_name, $collection_name, $site_info;
    $collection = $leodb->selectDatabase($database_name)->selectCollection($collection_name);
    $documents = $collection->find(["translated_html_en_$lang" => ['$exists'=> true,'$ne'=>'']], ['limit'=>10]);
    $title = $site_info['metadata'][$lang]['title'];
    $description = $site_info['metadata'][$lang]['description'];
    $canonical_url = $site_info['site_url'] . '/' . $lang;
    include __DIR__.'/view/home_lang.php';
}

function home_view() {    
    global $leodb, $database_name, $collection_name, $site_info;
    $collection = $leodb->selectDatabase($database_name)->selectCollection($collection_name);

    $title = "Hello World";
    $description = "This is Home!";
    $canonical_url = $site_info['site_url'];
    include __DIR__.'/view/home.php';
}

function document_view(string $lang, string $slug) {
    global $leodb, $database_name, $collection_name, $site_info;
    $collection = $leodb->selectDatabase($database_name)->selectCollection($collection_name);
    $document = $collection->findOne(['slug'=>$slug]);
    $field_names = array_keys((array) $document);
    $title = $document['title'];
    $description = $document["title_en_$lang"];
    $canonical_url = $site_info['site_url'].'/p/'.$lang.'/'.$document['slug'];
    include __DIR__.'/view/document.php';
    
}