<?php
require_once 'header.php';

if (isset($_POST['remove']))	{
  extract($_POST);

  $q= $db->prepare("DELETE FROM doctolib_sub WHERE ID = :ID");
  $q->execute([
    'ID' => $Id
  ]);

  $a= $db->prepare("DELETE FROM doctolib_forum WHERE topic = :topic");
  $a->execute([
    'topic' => $subject
  ]);
}
 ?>
<meta http-equiv="refresh" content="0.0001;URL=/CoronaTracks/doctolib_home_page.php">
