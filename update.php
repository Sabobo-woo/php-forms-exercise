<?php
//fifth
require_once 'DBBlackbox.php';
require_once 'Song.php';

session_start();

//get data same as we did in Edit
$id = $_GET['id'];

$song = find($id, 'Song');


$song->name = $_POST['name'] ?? $song->name;
$song->author = $_POST['author'] ?? $song->author;
$song->length = $_POST['length'] ?? $song->length;
$song->album = $_POST['album'] ?? $song->album;

update($id, $song);



$_SESSION["success_message"]="Song saved successfully";

header('Location: edit.php?id='.$id);