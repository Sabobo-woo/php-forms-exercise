<?php
//forth
require_once 'DBBlackbox.php';
require_once 'Song.php';

session_start();


//below condition is searching if such message was set, if found it gives it a variable and then deletes it 
if(isset($_SESSION['success_message'])) {
  $success_message = $_SESSION["success_message"];
  unset($_SESSION["success_message"]);
}


//get the id from the url
$id = $_GET['id'];


$song = find($id, 'Song');
?>

<!-- copy pasted form from create php that is now prefilled becuase we have the shit already filled here -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a song</title>
</head>
<body>
  <style>
    .success-message {
      background-color: red;
      
    }
  </style>

<?php if (!empty($success_message)) : ?>
  <div class=success-message>
<?= $success_message ?>
  </div>
  <?php endif; ?>
    <form action="update.php?id=<?= $id ?>" method="post">
    <!-- pay attention above to change the link to the correct place  -->
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