	<!-- deconnection -->

			<form method="post">
				<input type="submit" name="deconnection" id="deconnection" value="deconnection"> <br>
			</form>

			<?php
				if (isset($_POST['deconnection']))
				{
					session_unset();
					session_destroy();
					?>
					<meta http-equiv="refresh" content="0.0001;URL=/CoronaTracks/index.php">
					<?php
				}
			?>
