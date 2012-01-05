<?php

require_once('redbean/redbean.inc.php');

R::setup('mysql:host=localhost;dbname=redbeandatabase','root','root');
R::freeze(false);

$book = R::dispense( 'book' );

$book->title = 'Boost development with RedBeanPHP';
$book->author = 'Charles Xavier';

// transaction format
    R::begin();
    try{
        R::store($book);
        R::commit();
    }
    catch(Exception $e) {
        R::rollback();
        echo 'the book was not stored in the database';
    }

$bookObject = new stdClass();

$bookObject->id = $book->getID();
$bookObject->title = $book->title;
$bookObject->author = $book->author;

$json = json_encode($bookObject);

print_r($json);




//echo R::count('book');

//R::trash( $book );

//R::wipe( 'book' );



