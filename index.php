<?php

include_once('./templates/header.php');
include_once('./templates/footer.php');
include_once('./database/connection.php');
include_once('./database/query.php');
print_r(getAllUsers());
?>

<!-- Simple form which will send a POST request -->
<form action="./action_createUser.php" method="post">
  <label for="POST-x">name:</label>
  <input id="POST-x" type="text" name="name">
  <input type="submit" value="Create">
  
  <br><br>
</form>

<!-- Simple form which will send a POST request -->
<form action="./action_updateUser.php" method="post">
  <label for="POST-x">ID:</label>
  <input id="POST-x" type="number" name="id">
  <label for="POST-y">name:</label>
  <input id="POST-y" type="text" name="name">
  <input type="submit" value="Update">
  
  
</form>

<br><br>
<!-- Simple form which will send a POST request -->
<form action="./action_deleteUser.php" method="post">
  <label for="POST-x">id:</label>
  <input id="POST-x" type="number" name="id">

  <input type="submit" value="delete">
  
  
</form>


