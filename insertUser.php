<?php

include("conn.php");

$name = $_POST['txtname'];
$email = $_POST['txtemail'];
$password = $_POST['txtpassword'];
$address = $_POST['txtaddress'];
$city = $_POST['txtcity'];
$cep = $_POST['txtcep'];

/* TEST VARS
echo $name . "<br>";
echo $email . "<br>";
echo $password . "<br>";
echo $address . "<br>";
echo $city . "<br>";
echo $cep . "<br>";
*/

$query = $cn->query("select UserEmail from tbUser where UserEmail = '$email'");
$show = $query->fetch(PDO::FETCH_ASSOC);

if ($query->rowCount() == 1) {
  header("location:error2.php");
} else {
  $insert = $cn->query("insert into tbUser (UserName, UserEmail, UserPassword, UserStatus, UserAddress, UserCity, UserCep) values ('$name', '$email', '$password', 0, '$address', '$city', '$cep')");

  header("location:ok.php");
}
