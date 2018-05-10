<?php

session_start();

?>

<!DOCTYPE html>
<html>

<!-- this is the beginning of the head for my website-->

<head>
  <meta charset="utf-8">
  <title>Pain and Gain</title>
  <link rel="icon" type="image/ico" href="./photos/icon.png">
  <!-- These are all of the stylesheets and javascripts that I have linked in
  my header -->
  <link rel="stylesheet" href="./stylesheets/plans.css">
  <script src="./javascripts/javascript.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="./stylesheets/calorie_counter.css">
  <link rel="stylesheet" href="./stylesheets/front_page.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="./stylesheets/exercise_page.css">
  <link rel="stylesheet" href="./stylesheets/exercises.css">
  <link rel="stylesheet" href="./stylesheets/history_page.css">
  <link rel="stylesheet" href="./stylesheets/login.css">
</head>

<!-- this is the beginning of the body for my website-->
<header>
  <!--div for the title of my website-->
  <div class="Logo">
    <div class="nav-login">
      <?php
        if (isset($_SESSION['u_id'])){
        	echo '<form action="includes/logout.inc.php" method="POST">
      					<button type="submit" name="submit">Logout</button>
      				</form>';
        	} else {
            	echo'<form action="includes/login.inc.php" method="POST">
                        <input type="text" name="uid" placeholder="username/email">
                        <input type="password" name="pwd" placeholder="password">
                        <button type="submit" name="submit">Login</button>
                        <a href="signup.php">Sign up</a>
                      </form>';
            }
      ?>

    </div>
    <center> <img  class="page_logo"src="./photos/title.png"></center>
  </div>
<!--this is the div for my login page-->


</header>


<body>

  <!-- div for my background image-->
  <div class="combo1">

    <body background="./photos/background.png">
  </div>

  <!--the wrapper is what contains all of the contents of my website within the middle
of the page-->
  <div class="wrapper">
