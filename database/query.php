<?php

function getAllUsers() {
	//TODO
  global $dbh;
  $stmt = $dbh->prepare('SELECT * FROM user');
  $stmt->execute();
  return $stmt->fetchAll();
}

//TODO
function insertUser($name){
  global $dbh;
  $stmt =$dbh->prepare('INSERT into user(name) values(?)');
  $stmt->execute(array($name));
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
