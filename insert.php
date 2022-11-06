<?php
//third
require_once 'DBBlackbox.php';
require_once 'Song.php';

session_start();

$valid = true;
if (empty($_POST['name'])) {
     $valid= false;
}

if (!empty($_POST['length'])&& !is_numeric($_POST['length'])) {
     $valid= false;
}

if(!$valid) {
     $_SESSION['error_message'] = 'Something went wrong'
    header('Location: create.php');

    
    exit(); //stops all script right here 
}

$song = new Song;

// if (isset ($_POST['name'])) {
// $song->name = $_POST['name']
// }

//can be done also like
$song->name = $_POST['name'] ?? $song->name;
$song->author = $_POST['author'] ?? $song->author;
$song->length = $_POST['length'] ?? $song->length;
$song->album = $_POST['album'] ?? $song->album;


//inserting into storage and getting id:
$id = insert($song);
var_dump($id);


$_SESSION["success_message"]="Song saved successfully"

header('Location: edit.php?id='.$id);