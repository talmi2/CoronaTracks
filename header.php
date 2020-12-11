<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include 'database.php';
    global $db;
     ?>
    <nav class="menu_nav">
  		<ul>
  			<li class="nav">
  				<a href="home.php">
  				   Home
  				</a>
  			</li>

  			<li class="nav">
  				<a href="corona_news.php">
             CoronaNews
  				</a>
  			</li>

  			<li class="nav">
  				<a href="doctolib_home.php">
            Doctolib Forum
  				</a>
  			</li>
        <li class="nav">
  				<a href="map.php">
            Map
  				</a>
  			</li>
        <li class="nav">
  				<a href="order_home.php">
            Order a Vaccin or a test
  				</a>
  			</li>
  		</ul>
  	</nav><br><br>

    <?php
    if (isset($_SESSION['Mail'])) {
      require_once 'deconnection.php';
    }
     ?>

  </body>
</html>
