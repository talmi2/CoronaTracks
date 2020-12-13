<?php
  if (isset($_POST['formmessage']))	{
    extract($_POST);

    $q = $db->prepare("INSERT INTO message_stocking(message,date) VALUES(:message,:date)");
    $q->execute([
      'message'=> $message,
      'date'=> $date
    ]);
    ?>
    <meta http-equiv="refresh" content="0.0001;URL=/CoronaTracks/home_confirmation.php">
    <?php
  }
 ?>
