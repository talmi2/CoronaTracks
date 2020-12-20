<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
      .menu_nav{
        background-color: #2b334e;
  overflow: hidden;
  text-align: center;
  font-size: 15px;
      }
      ul{
         list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #2b334e

      }
      li {
  float: left;
}
    li a{
       display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
    }
    li a:hover {
  background-color: #111;
}
    </style>
  </head>
  <body>
    <?php include 'database.php';
    global $db;
     ?>
    <nav class="menu_nav">
  		<ul>
  			<li><a href="home_page.php">Home</a></li>

  			<li><a href="corona_news_page.php">CoronaNews</a></li>

  			<li><a href="doctolib_home.php">Doctolib Forum</a></li>
       
        <li><a href="map.php">Map</a></li>
        
      <li><a href="order_home.php">Order a Vaccin or a test</a></li>
  		</ul>
  	</nav><br><br>

    <?php
    if (isset($_SESSION['Mail'])) {
      require_once 'deconnection.php';
    }
     ?>

  </body>
</html>
