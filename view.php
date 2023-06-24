<?php

function home_view() {    
    global $leodb;
    $db_names = $leodb->listDatabaseNames();
    include __DIR__.'/view/home.php';

}

function category_view(string $database_name, string $collection_name) {
    global $leodb;
    $collection = $leodb->selectDatabase($database_name)->selectCollection($collection_name);
    $documents = $collection->find();
    include __DIR__.'/view/collection.php';
}

function document_view(string $database_name, string $collection_name, string $object_id) {
    global $leodb;
    $collection = $leodb->selectDatabase($database_name)->selectCollection($collection_name);
    $document = $collection->findOne(['_id'=>new \MongoDB\BSON\ObjectId($object_id)]);
    $field_names = array_keys((array) $document);
    include __DIR__.'/view/document.php';
    
}