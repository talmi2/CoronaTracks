
<!DOCTYPE html>
<html>
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
    h2{
    	color: white;
    }
  
    label{
    	display: inline-block;
    	width: 100px;
    	color: white;
    }

    </style>
</head>
<body>

	<!-- haut de page -->
	<header>
		<h1> CoronaTracks </h1>
	</header>

	<?php
		require_once 'header.php';
		?>
		<h2> Create an Account </h2>
		<p> <br> </p>
	<!-- register -->
	<div id="register_div" class="register_div">

		<form method="post">
			<label id="id">ID:</label>
			<input type="id" name="id" id="id" placeholder="ID" min="9" maxlength="9" required><br>

			<label id="firstname">First name:</label>
			<input type="firstname" name="first_name" id="firstname" placeholder="First Name" required><br>

			<label id="lastname">Last name:</label>
			<input type="lastname" name="last_name" id="lastname" placeholder="Last Name" required><br>

			<label id="lemail">Mail: </label>
			<input type="email" name="email" id="email" placeholder="Mail" required><br>

			<label id="lpassword">Password: </label>
			<input type="password" name="password" id="password" placeholder="Password" required><br>

			<label id="lcpassword">Password confirmation: </label>
			<input type="password" name="cpassword" id="cpassword" placeholder="password confirmation" required><br>

			<input type="radio" name="gender" id="male" required>
			<label for="male">Male</label>
			<input type="radio" name="gender" id="female">
			<label for="female">Female</label><br>

			<input type="submit" name="register" id="register"><br>
		</form>

		<?php include 'register.php'; ?>

		<br><br>

		<a href="/CoronaTracks/login_page.php">Return to login page</a>

	</div

	<?php
		require_once 'footer.php';
		?>

</body>
</html>
