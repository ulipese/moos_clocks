<?php //put your database infos
  $server = "localhost";
  $user = "root";
  $password = "12345678"; 
  $db = "dbMoosClocks";

  $cn = new PDO("mysql:host=$server; dbname=$db;", $user, $password)
?>


