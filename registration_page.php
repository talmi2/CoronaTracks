<?php session_start();?>

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
			<input type="id" name="id" id="id" placeholder="ID" min="9" maxlength="9" required><br>
			<input type="firstname" name="first_name" id="firstname" placeholder="First Name" required><br>
			<input type="lastname" name="last_name" id="lastname" placeholder="Last Name" required><br>
			<input type="email" name="email" id="email" placeholder="Mail" required><br>
			<input type="password" name="password" id="password" placeholder="Password" required><br>
			<input type="password" name="cpassword" id="cpassword" placeholder="password confirmation" required><br>
			<input type="radio" name="gender" id="male" required>
			<label for="male">Male</label>
			<input type="radio" name="gender" id="female">
			<label for="female">Female</label>
			<input type="radio" name="gender" id="other">
			<label for="other">Other</label><br>

			<input type="submit" name="register" id="register"><br>
		</form>

		<?php include 'register.php'; ?>

		<br><br>

		<a href="/CoronaTracks/login_page.php">Return to login page</a>

	</div>


</body>
</html>
