<?php
require_once 'DBBlackbox.php';
require_once 'Song.php';


session_start();
//after we start the session new super global appears
var_dump($_SESSION);
// $_SESSION['name']= 'jan'; //once i put something in the session. This information is kept once the session is started and is there even if i delete this lien
// unset($_SESSION['name']);   this deletes the session input i just logged above





                //empty argument, skip 0 so no skipping/ third argument - return values with class song)
$songs = select(null, 0, 'song');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- list of songs goes here -->
<a href="create.php">Add a new song</a>
    <ul>
        <?php foreach($songs as $song) : ?>
            <li>
                <?= $song->name ?>
                by <?= $song->author ?>
<a href="edit.php?id=<?=$song->id?>">EDIT</a>
            </li>
            <?php endforeach ?>
    </ul>
</body>
</html>