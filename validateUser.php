<?php
include('./conn.php');

session_start();

$userEmail = $_POST['txtEmail'];
$userPassword = $_POST['txtPassword'];

// echo $userEmail.'<br>';
// echo $userPassword . '<br>';

$query = $cn->query("select Id, UserName, UserEmail, UserPassword, UserStatus from tbUser where UserEmail = '$userEmail' and UserPassword = '$userPassword'");

if ($query->rowCount() == 1) {
  $showUser = $query->fetch(PDO::FETCH_ASSOC);

  if ($showUser['UserStatus'] == 0) {
    $_SESSION['ID'] = $showUser['Id'];
    $_SESSION['Status'] = 0;
    header('location:index.php');
  } else {
    $_SESSION['ID'] = $showUser['Id'];
    $_SESSION['Status'] = 1;
    header('location:index.php');
  }
} else {
  header('location:error.php');
}
