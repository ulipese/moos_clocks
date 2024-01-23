<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/moos-ecommerce">Moos</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/moos-ecommerce">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="/moos-ecommerce/releases.php">News</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/moos-ecommerce/categories.php?cat=Luxury Clocks">Luxury Clocks</a></li>
            <li><a href="/moos-ecommerce/categories.php?cat=Smart Clocks">Smart Clocks</a></li>
            <li><a href="/moos-ecommerce/categories.php?cat=Cocktail Clocks">Cocktail Clocks</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Contact</a></li>
        <?php if (empty($_SESSION['ID'])) { ?>
          <li><a href="/moos-ecommerce/formLogon.php"><span class="glyphicon glyphicon-log-in"> Login</a></li>
          <?php } else {
          if ($_SESSION['Status'] == 0) {
            $queryUser = $cn->query(
              "select UserName from tbUser where Id = $_SESSION[ID]"
            );
            $showUser = $queryUser->fetch(PDO::FETCH_ASSOC);
          ?>
            <li><a href="#"><span class="glyphicon glyphicon-user"> <?php echo $showUser['UserName'] ?></span></a></li>
            <li><a href="/moos-ecommerce/logout.php"><span class="glyphicon glyphicon-log-out"> Logout</span></a></li>
          <?php } else { ?>
            <li><a href="adm.php"><button class="btn btn-sm btn-danger">Admin</button></a></li>
            <li><a href="/moos-ecommerce/logout.php"><span class="glyphicon glyphicon-log-out"> Logout</span></a></li>
        <?php }
        } ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>