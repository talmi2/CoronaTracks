<?php

	if (isset($_POST['formlogin']))	{
		extract($_POST);

		if (!empty($email) && !empty($password)){
			$q = $db->prepare("SELECT * FROM doctor_data WHERE Mail = :Mail");
			$q->execute(['Mail' => $email]);
			$result = $q->fetch();

			if ($result == true){
				// le compte existe
				if (password_verify($password, $result['Password'])){

					$_SESSION['Mail'] = $result['Mail'];
					?>
					<meta http-equiv="refresh" content="0.0001;URL=/CoronaTracks/home.php">
					<?php



				}
				else {
					echo "Incorrect password";
				}
			}
			else {
				echo "Incorrect mail";
			}
		}
		else {
			echo "Complet all field";
		}
	}

?>
