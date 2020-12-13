<?php
  if (isset($_POST['formnews']))	{
    extract($_POST);

    $q = $db->prepare("INSERT INTO news(message,date) VALUES(:message,:date)");
    $q->execute([
      'message'=> $message,
      'date'=> $date
    ]);
    ?>
    <meta http-equiv="refresh" content="0.0001;URL=/CoronaTracks/corona_news_page.php">
    <?php
  }
 ?>
