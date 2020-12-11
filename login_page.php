<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
  		require_once 'header.php';
  		?>

      
    <p>You don't have an account?<a href="registration_page.php">Subscribe</a></p>

    <form method="post">
     <input type="email" name="email" id="email" placeholder="mail" required><br>
     <input type="password" name="password" id="password" placeholder="password" required><br>
     <input type="submit" name="formlogin" id="formlogin" value="login"><br>
   </form>

   <?php include 'login.php'; ?>

  </body>
</html>
