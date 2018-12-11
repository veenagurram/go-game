<?php
session_start();
?>
<?php 
echo"Email Address";
echo$_SESSION['current_user'];
echo"<br/>";
echo "UserID";
echo $_SESSION['userid'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>
    Go GAME
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="/project_swe/css/signup.css" rel="stylesheet">

</head>

<body background="https://media.wired.com/photos/59325dedaef9a462de98235c/master/w_2500,c_limit/Go-04.jpg">



  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Go Game</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="newgame.php">New Game</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="joingame.php">Join Game</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Leader Board</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Completed Games</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="instructions.html">Instructions</a>
        </li>

      </ul>

      <ul class="navbar-nav mr-right">
        <li class="nav-item">
          <a class="nav-link" href="#">Logout</a>
        </li>
      </ul>
    </div>
  </nav>


  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>






</html>
