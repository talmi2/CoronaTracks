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
     label{
      display: inline-block;
      width: 100px;
      color: white;
    }
    #formlogin{
      display: inline-block;
    border-radius: 4px;
    background-color: #1E90FF;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 18px;
    padding: 14px;
    width: 80px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
    }
    #subscribe:link {color:#1E90FF;}
    #subscribe:visited {color:#1E90FF;}
    #subscribe:hover {color:#ffcc00;}
    #error{
      color: red;
    }
    </style>
  </head>
  <body>
   
    <?
  		require_once 'header.php';
  		?>


      <h2> Log in to your account: </h2>


    <form method="post">
      <label id="lemail">Email: </label>
      <input type="email" name="email" id="email" placeholder="mail" required><br>

      <label id="lpassword">Password: </label>
      <input type="password" name="password" id="password" placeholder="password" required><br>
      <input type="submit" name="formlogin" id="formlogin" value="Login"><br>
   </form>

   <p class="msg">You don't have an account ?<a id="subscribe" href="registration_page.php">Subscribe</a></p>
   <?php include 'login.php'; ?>

   <?php
 		require_once 'footer.php';
 		?>
  </body>
</html>
