<?php

function view_404() {
    header('HTTP/1.0 404 Not Found');
    exit();
}

function home_lang_view(string $lang, int $page = 1) {
    global $leodb, $database_name, $collection_name, $site_info;
    $per_page = 10;
    $skip = ($page-1) * $per_page;
    $collection = $leodb->selectDatabase($database_name)->selectCollection($collection_name);
    $query_filter = ["translated_html_en_$lang" => ['$exists'=> true,'$ne'=>'']];
    $all_documents_count = iterator_count($collection->find($query_filter));
    $total_pages = (int)($all_documents_count/$per_page);
    if ($all_documents_count%$per_page!=0) $total_pages++;

    $documents = $collection->find($query_filter, ['skip'=>$skip,'limit'=>10])->toArray();
    if (count($documents) == 0) view_404();
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
    if (!$document) view_404();
    $field_names = array_keys((array) $document);
    $title = $document['title'];
    $description = $document["title_en_$lang"];
    $canonical_url = url_for_document($lang, $slug);
    $alternate_languages = [];
    foreach ($site_info['metadata'] as $k=>$v) {
        if ($document->offsetExists("translated_html_en_$k") && $document["translated_html_en_$k"] != '') {
            $alternate_languages[$k] = $site_info['metadata'][$k]['language'];
        }
    }
    $header_html = '';
    foreach ($alternate_languages as $k=>$fl) {
        $header_html .= '<link rel="alternate" hreflang="'.$k.'" href="'.url_for_document($k, $slug).'"/>';
    }

    include __DIR__.'/view/document.php';
    
}

function category_view(string $lang, string $category, int $page) {
    global $leodb, $database_name, $collection_name, $site_info;
    $per_page = 10;
    $skip = ($page-1) * $per_page;
    $collection = $leodb->selectDatabase($database_name)->selectCollection($collection_name);
    $query_filter = [
        'categories'=>['$in'=>[$category]],
        "translated_html_en_$lang" => ['$exists'=> true,'$ne'=>''],
    ];
    $all_documents_count = iterator_count($collection->find($query_filter));
    $total_pages = (int)($all_documents_count/$per_page);
    if ($all_documents_count%$per_page!=0) $total_pages++;

    $documents = $collection->find($query_filter, ['skip'=>$skip,'limit'=>$per_page])->toArray();
    if (count($documents) == 0) view_404();
    $title = $category.' - page '.$page;
    $description = 'Category '. $category .' posts';
    $canonical_url = url_for_category($lang, $category, $page);

    include __DIR__.'/view/category.php';
}