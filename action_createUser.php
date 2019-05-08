<?php
include_once('./database/connection.php');
include_once('./database/query.php');
$name = $_POST['name'];

insertUser($name);

header('Location: index.php');

?>