<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Moos - Login</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

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

  include('conn.php');
  include('./includes/nav.php');
  include('./includes/header.php');

  ?>


  <div class="container-fluid">

    <div class="row">

      <div class="col-sm-4 col-sm-offset-4 text-center">

        <h2>Email or password is incorrect!!</h2>

        <a href="formLogon.php" class="btn btn-block btn-default" role="button">Try Again</a>

        <a href="./formUser.php">
          <button type="button" class="btn btn-lg btn-link">
            Not registered yet? Register now here!
          </button>
        </a>

      </div>
    </div>
  </div>

  <?php include('./includes/footer.php') ?>




</body>

</html>