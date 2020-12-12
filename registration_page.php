<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>

	<!-- haut de page -->
	<header>
	</header>

	<?php
		require_once 'header.php';
		?>

	<!-- register -->
	<div id="register_div" class="register_div">

		<form method="post">
			<label id="lid">ID:</label>
			<input type="id" name="id" id="id" placeholder="ID" min="9" maxlength="9" required><br>

			<label id="lfirstname">First name:</label>
			<input type="firstname" name="first_name" id="firstname" placeholder="First Name" required><br>

			<label id="llastname">Last name:</label>
			<input type="lastname" name="last_name" id="lastname" placeholder="Last Name" required><br>

			<label id="lemail">Mail:</label>
			<input type="email" name="email" id="email" placeholder="Mail" required><br>

			<label id="lpassword">Password:</label>
			<input type="password" name="password" id="password" placeholder="Password" required><br>

			<label id="lcpassword">Password confirmation:</label>
			<input type="password" name="cpassword" id="cpassword" placeholder="password confirmation" required><br>

			<input type="radio" name="gender" id="male" value="Male" required>
			<label for="male">Male</label>
			<input type="radio" name="gender" id="female" value="Female">
			<label for="female">Female</label><br>

			<input type="submit" name="register" id="register">
		</form>

		<?php include 'register.php'; ?>



		<a href="/CoronaTracks/login_page.php">Return to login page</a>

	</div>


</body>
</html>
