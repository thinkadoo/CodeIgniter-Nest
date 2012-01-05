<?php

require_once('redbean/redbean.inc.php');

R::setup('mysql:host=localhost;dbname=redbeandatabase','root','root');
R::freeze(true);

$id = '1';
$book = R::load('book', $id);

$bookObject = (object)$book->export();

$json = json_encode($bookObject);

print_r($json);


