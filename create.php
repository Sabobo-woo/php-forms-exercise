<?php
//second
require_once 'DBBlackbox.php';
require_once 'Song.php';

$song = new Song;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a song</title>
</head>
<body>
    <form action="insert.php" method="post">
    <!-- display the form prefilled with entity data -->
    Name:<br>
    <input type="text" name="name" value="<?= htmlspecialchars((string)$song->name) ?>"><br>
    <br>
    Author:<br>
    <input type="text" name="author" value="<?= htmlspecialchars((string)$song->author) ?>"><br>
    <br>
    Length:<br>
    <input type="number" name="length" value="<?= htmlspecialchars((string)$song->length)?>"> seconds<br>
    <br>
    Album:<br>
    <input type="text" name="album" value="<?= htmlspecialchars((string)$song->album) ?>"><br>
    <br>
    <button type="submit">Save</button>
</form>  
</body>
</html>