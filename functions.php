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