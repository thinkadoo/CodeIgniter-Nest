<?php

require_once('redbean/redbean.inc.php');

R::setup('mysql:host=localhost;dbname=redbeandatabase','root','root');
R::freeze(true);

$id = '1';
$book = R::load('book', $id);

$bookObject = new stdClass();

$bookObject->id = $book->getID();
$bookObject->title = $book->title;
$bookObject->author = $book->author;

// meta data
$bookObject->type = $book->getMeta('type');
$bookObject->tainted = $book->getMeta('tainted');

$json = json_encode($bookObject);

print_r($json);