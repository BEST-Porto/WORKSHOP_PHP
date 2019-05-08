

<div>
    <p> <?= $_POST['x'] + $_POST['y'];?> </p>
</div>


<!-- Simple form which will send a POST request -->
<form action="./formSum.php" method="post">
  <label for="POST-x">x:</label>
  <input id="POST-x" type="number" name="x">
  <label for="POST-y">y:</label>
  <input id="POST-y" type="number" name="y">
  <input type="submit" value="SUM">
</form>



