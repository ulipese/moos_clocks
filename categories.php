<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Moos - Buy your time</title>
  <!-- CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery livraria -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- JavaScript compilado-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
    .navbar {
      margin: 0;
    }
  </style>
</head>

<body>
  <?php include("./conn.php") ?>
  <?php session_start();  ?>
  <?php include("./includes/nav.php"); ?>
  <?php include("./includes/header.php"); ?>

  <?php
  error_reporting(0);

  !$cat = $_GET['cat'];
  if ($cat == '') {
    $cat = 'Luxury Clocks';
  }
  ?>

  <div class="container-fluid">
    <div class="row content-center">
      <?php
      $query = $cn->query("select ClockImage, ClockName, ClockPrice, ClockQuantity from vwClock where Category = '$cat'");

      while ($showData = $query->fetch(PDO::FETCH_ASSOC)) { ?>
        <div class="col-sm-3">
          <div class="grid text-center">
            <img src="<?php echo $showData["ClockImage"] ?>" alt=" <?php echo $showData["ClockName"] ?> " class="img-fluid" style="width: 200px; height: 150px; ">
          </div>

          <div>
            <h2><b><?php echo mb_strimwidth($showData["ClockName"], 0, 18, "...") ?></b></h2>
          </div>
          <div>
            <h4>$<?php echo number_format($showData["ClockPrice"], 2, ".", ",") ?></h4>
          </div>

          <div class="text-center">
            <button class="btn btn-lg btn-block btn-default">
              <span class="glyphicon glyphicon-info-sign" style="color: cadetblue"></span>
              <span style="color: cadetblue">See more</span>
            </button>
          </div>

          <?php
          if ($showData["ClockQuantity"] != 0) { ?>
            <div class="text-center" style="margin-top: 10px; margin-bottom: 100px;">
              <button class="btn btn-lg btn-block btn-primary">
                <span class="glyphicon glyphicon-usd"></span>
                <span>Buy</span>
              </button>
            </div>
          <?php } else { ?>
            <div class="text-center" style="margin-top: 10px; margin-bottom: 100px;">
              <button class="btn btn-lg btn-block btn-danger" disabled>
                <span class="glyphicon glyphicon-remove-circle"></span>
                <span>Sold Out</span>
              </button>
            </div>
          <?php } ?>
        </div>
      <?php } ?>
    </div>
  </div>
  <?php include("./includes/footer.php") ?>
</body>

</html>