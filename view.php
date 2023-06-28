<?php

function view_404() {
    header('HTTP/1.0 404 Not Found');
}

function home_lang_view(string $lang, int $page = 1) {
    global $leodb, $database_name, $collection_name, $site_info;
    $per_page = 10;
    $skip = ($page-1) * $per_page;
    $collection = $leodb->selectDatabase($database_name)->selectCollection($collection_name);
    $all_documents_count = iterator_count($collection->find(["translated_html_en_$lang" => ['$exists'=> true,'$ne'=>'']]));
    $total_pages = (int)($all_documents_count/$per_page);
    if ($all_documents_count%$per_page!=0) $total_pages++;

    $documents = $collection->find(["translated_html_en_$lang" => ['$exists'=> true,'$ne'=>'']], ['skip'=>$skip,'limit'=>10])->toArray();
    $title = $site_info['metadata'][$lang]['title'];
    $description = $site_info['metadata'][$lang]['description'];
    $canonical_url = url_for_home_lang($lang, $page);
    include __DIR__.'/view/home_lang.php';
}

function home_view() {    
    global $leodb, $database_name, $collection_name, $site_info;
    $collection = $leodb->selectDatabase($database_name)->selectCollection($collection_name);

    $title = "VCQT";
    $description = "The Knowledge Carrier";
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
    $canonical_url = url_for_document($lang, $slug);
    include __DIR__.'/view/document.php';
    
}
