<!-- register verification -->

		<?php


			if (isset($_POST['formsend'])){

				extract($_POST);

				if (!empty($email) && !empty($password) && !empty($cpassword)){

					if ($password == $cpassword) {

						$options = [
    						'cost' => 12,
						];

						$hashpass = password_hash($password, PASSWORD_BCRYPT, $options);


						$c = $db->prepare("SELECT email FROM user WHERE email = :email");
						$c->execute(['email' => $email]);

						$result = $c->rowCount();

						if ($result == 0) {
							$q = $db->prepare("INSERT INTO user(email,password) VALUES(:email,:password)");
							$q->execute([
								'email' => $email,
								'password' => $hashpass
							]);
							echo "Le compte a été crée";
							$_SESSION['email']= $email;
							header('Location: information_registration_page.php');
  							exit();
						}

						else{
							echo "cet email existe deja";
						}

					}

					else{
						echo "la confirmation n'est pas correcte";
					}

				}
			}


		?>