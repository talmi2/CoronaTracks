<?php
require_once 'header.php';

if (isset($_POST['remove']))	{
  extract($_POST);

  $q= $db->prepare("DELETE FROM news WHERE ID = :ID");
  $q->execute([
    'ID' => $Id
  ]);
}
 ?>
<meta http-equiv="refresh" content="0.0001;URL=/CoronaTracks/corona_news_page.php">
