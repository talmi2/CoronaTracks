<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
	<title>זוגיות</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/css/registration_page_styles.css">
</head>
<body>
	<body background="/img/font.jpg">

	<!-- haut de page -->
	<header>
	</header>

	<?php

	echo "Veuiller creer un compte";

	?>

	<!-- register -->
	<div id="register_block">

		<?php include 'database.php';
		global $db; ?>

		<form method="post">
			<input type="email" name="email" id="email" placeholder="email" required><br>
			<input type="password" name="password" id="password" placeholder="password" required><br>
			<input type="password" name="cpassword" id="cpassword" placeholder="password confirmation" required><br>
			<input type="submit" name="formsend" id="formsend"><br>
		</form>

		<?php include 'register.php'; ?>

		<br><br>

		<a href="/">returne to login page</a>

	</div>


</body>
</html>
