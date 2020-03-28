<?php
$dsn = 'mysql:dbname=mydb;host=localhost';
$user = 'xxxxxxxxx';
$password = 'xxxxxxxx';
try {
  $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e){
  print('Error:'.$e->getMessage());
}
?>