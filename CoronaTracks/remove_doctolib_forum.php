<?php

if (isset($_POST['remove']))	{
  extract($_POST);

  $q= $db->prepare("DELETE FROM doctolib_forum WHERE ID = :ID");
  $q->execute([
    'ID' => $Id
  ]);
 ?>
<meta http-equiv="refresh" content="0.0001;URL=/CoronaTracks/doctolib_forum_page.php?topic=<?php echo $_GET['topic']; ?>">

    <?php
  }
 ?>
