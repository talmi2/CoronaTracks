<!-- register verification -->

		<?php


			if (isset($_POST['register'])){

				extract($_POST);

				if (!empty($email) && !empty($password) && !empty($cpassword)){

						if ($password == $cpassword) {

							$options = [
	    						'cost' => 12,
							];

							$hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

							$a = $db->prepare("SELECT ID FROM doctor_data WHERE ID = :ID");
							$a->execute(['ID' => $id]);

							$answer = $a->rowCount();

							if($answer == 0) {

								$c = $db->prepare("SELECT Mail FROM doctor_data WHERE Mail = :Mail");
								$c->execute(['Mail' => $email]);

								$result = $c->rowCount();

								if ($result == 0) {
									$q = $db->prepare("INSERT INTO doctor_data(ID,First_Name,Last_Name,Mail,Gender,Password,Type) VALUES(:ID,:First_Name,:Last_Name,:Mail,:Gender,:Password,:Type)");
									$q->execute([
										'ID' => $id,
										'First_Name'=> $first_name,
										'Last_Name'=> $last_name,
										'Mail' => $email,
										'Gender'=> $gender,
										'Password' => $hashpass,
										'Type' => 'doctor'
									]);
									?><span id="success"><?php echo "Your account was successfully created, to complete your registration as a doctor, please send your medical degree to the mail: talouche@hotmail.fr";
										?></span>
										<a href="/CoronaTracks"></a>

									<?php
								} else {
									?>
									<span id="error" class="error"><?php echo "This mail already exist"; ?></span>
									<?php
								}
							} else 	{
								?>
								<span id="error" class="error"><?php echo "There is already an account with this ID"; ?></span>
								<?php
							}

						} else {
							?>
							<span id="error" class="error"><?php echo "The password confirmation is not valid"; ?></span>
							<?php
						}

				}
				else {
					?>
					<span id="error" class="error"><?php echo "Complete all field"; ?></span>
					<?php
				}
			}


		?>
