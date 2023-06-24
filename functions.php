<?php

function get_html_lang(string $database_name, string $collection_name, string $object_id, string $html_lang) {
    global $leodb;
    $collection = $leodb->selectDatabase($database_name)->selectCollection($collection_name);
    $document = $collection->findOne(['_id'=>new \MongoDB\BSON\ObjectId($object_id)]);
    if ($document->offsetExists("translated_html_$html_lang") && $document["translated_html_$html_lang"] != '') {
        echo $document["translated_html_$html_lang"];
    }
    else {
        echo "Nothing Found!";
    }
}