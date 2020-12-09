<?php  
	
	if (isset($_POST['formlogin']))
	{
		extract($_POST);

		if (!empty($lemail) && !empty($lpassword))
		{
			$q = $db->prepare("SELECT * FROM user WHERE email = :email");
			$q->execute(['email' => $lemail]);
			$result = $q->fetch();

			if ($result == true)
			{
				// le compte existe
				if (password_verify($lpassword, $result['password']))
				{
					echo "connection OK!";
					header('Location: /includes/home_page.php');

					$_SESSION['email'] = $result['email'];

				}
				else
				{
					echo "Le mot de passe est incorecte";
				}
			}
			else
			{
				echo "le compte portant l'email " . $lemail. " n'existe pas";
			}
		}

		else{ echo "Veuillez remplire l'ensemble des champ";}
	}

?>