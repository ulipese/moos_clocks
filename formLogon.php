<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
    .navbar {
      margin-bottom: 0;
    }
  </style>
</head>

<body>
  <?php
  include('./conn.php');
  include('./includes/nav.php');
  include('./includes/header.php');

  session_start();
  ?>


  <div class="container-fluid">

    <div class="row">

      <div class="col-sm-4 col-sm-offset-4">

        <h2>Login</h2>
        <form name="frmuser" action="validateUser.php" method="post">
          <br>
          <div class="form-group">

            <label for="email">Email</label>
            <input name="txtEmail" type="email" class="form-control" required id="email">
          </div>

          <div class="form-group">

            <label for="password">Password</label>
            <input name="txtPassword" type="password" class="form-control" required id="password">
          </div>


          <button type="submit" class="btn btn-lg btn-default">

            <span><b>Login</b></span>

          </button>
          <br> <br>

          <a href="./formUser.php">
            <button type="button" class="btn btn-lg btn-link">
              Don't have an account? Register here!
            </button>
          </a>
        </form>
        <br>
        <br>
        <br>
      </div>
    </div>
  </div>

  <?php include('./includes/footer.php') ?>