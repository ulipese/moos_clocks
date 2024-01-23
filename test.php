<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test</title>
</head>

<body>
  <?php
  include 'conn.php';
  // var $query recebe a var $cn que vai receber o resultado da query
  $query = $cn->query('select * from vwClock'); // realiza uma query no banco através do PDO

  while ($showData = $query->fetch(PDO::FETCH_ASSOC)) {
    echo "<h1>" . $showData['ClockName'] . "</h1> <br>";
    echo "<h2>" . $showData['ClockPrice'] . "</h2><br>";
    echo $showData['ClockDescription'] . "<br>";
    echo $showData['Category'] . "<br>";
    echo $showData['Brand'] . "<br>";
    echo "<hr>";
  }
  ?>
</body>

</html>