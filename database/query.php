<?php

function getAllUsers() {
	//TODO
  global $dbh;
  $stmt = $dbh->prepare("TODO");
  $stmt->execute();
  return $stmt->fetchAll();
}

//TODO
function insertUser(){
  global $dbh;
  $stmt =$dbh->prepare();
  $stmt->execute(array());
}

//TODO
function deleteUser(){
  global $dbh;

  $stmt =$dbh->prepare();
  return $stmt2->execute(array());
}

//TODO
function updateUser(){
  global $dbh;
  $stmt2 = $dbh->prepare('');
  return $stmt2->execute(array());
}
?>
