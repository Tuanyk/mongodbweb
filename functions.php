<?php

function get_html_lang(string $object_id) {
    global $leodb, $database_name, $collection_name, $site_lang;
    $collection = $leodb->selectDatabase($database_name)->selectCollection($collection_name);
    $document = $collection->findOne(['_id'=>new \MongoDB\BSON\ObjectId($object_id)]);
    if ($document->offsetExists("translated_html_$site_lang") && $document["translated_html_$site_lang"] != '') {
        echo $document["translated_html_$site_lang"];
    }
    else {
        echo "Nothing Found!";
    }
}

function url_for_home_lang(string $lang, int $page = 1) {
    $url = '/'.$lang;
    $page = (int)$page;
    if ($page > 1) $url = $url . '/' . $page;
    return $url;
}

function url_for_document(string $lang, string $slug) {
    $url = '/p/'.$lang.'/'.$slug;
    return $url;
}