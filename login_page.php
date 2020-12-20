<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
      h1{
        text-align: center;
  color: white;
  font-size: 50px;
    }
      .menu_nav{
        display:none;
      }
       body{
      background-color: #364061;
      text-align: center;
    }
    .msg{
      color: white;
      font-size: 20px;
    }

    h2{
      color: white;
    }
    #lemail{
      color: white;
    }
    #lpassword{
      color: white;
    }
    </style>
  </head>
  <body>
    <header> <h1> CoronaTracks </h1> </header>
    <?php
  		require_once 'header.php';
  		?>


      <h2> Log in to your account: </h2>


    <form method="post">
      <label id="lemail">Email: </label>
      <input type="email" name="email" id="email" placeholder="mail" required><br>

      <label id="lpassword">Password: </label>
      <input type="password" name="password" id="password" placeholder="password" required><br>
      <input type="submit" name="formlogin" id="formlogin" value="login"><br>
   </form>

   <p class="msg">You don't have an account ?<a href="registration_page.php">Subscribe</a></p>
   <?php include 'login.php'; ?>

   <?php
 		require_once 'footer.php';
 		?>
  </body>
</html>
