<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Minha Loja - Logon de usuário</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="jquery.mask.js"></script>


  <style>
    .navbar {
      margin-bottom: 0;
    }
  </style>

  <script>
    $(document).ready(function() {
      $("#cep").mask("00000-000");
      // $("#cell").mask("(00) 00000-0000");
    });
  </script>

</head>





<body>

  <?php

  include('conn.php');
  include('./includes/nav.php');
  include('./includes/header.php');


  ?>


  <div class="container-fluid">

    <div class="row">

      <div class="col-sm-4 col-sm-offset-4">

        <h2>Register</h2>

        <form method="post" action="insertUser.php" name="logon">

          <div class="form-group">

            <label for="name">Name</label>
            <input name="txtname" type="text" class="form-control" required id="name">
          </div>

          <div class="form-group">

            <label for="lastname">Lastname</label>
            <input name="txtlastname" type="text" class="form-control" required id="lastname">
          </div>


          <div class="form-group">

            <label for="email">Email</label>
            <input name="txtemail" type="email" class="form-control" required id="email">
          </div>


          <div class="form-group">

            <label for="password">Password</label>
            <input name="txtpassword" type="password" class="form-control" required id="password">
          </div>

          <div class="form-group">

            <label for="address">Address</label>
            <textarea name="txtaddress" rows="5" class="form-control" required id="address"></textarea>
          </div>


          <div class="form-group">

            <label for="city">City</label>
            <input name="txtcity" type="text" class="form-control" required id="city">
          </div>


          <div class="form-group">

            <label for="cep">Postal Code (CEP)</label>
            <input name="txtcep" type="text" class="form-control" required id="cep">
          </div>


          <button type="submit" class="btn btn-lg btn-default">

            <span class="glyphicon glyphicon-pencil"> Register</span>

          </button>

        </form>

      </div>
    </div>
  </div>

  <?php include('./includes/footer.php') ?>




</body>

</html>