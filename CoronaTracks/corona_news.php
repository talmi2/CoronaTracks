<?php
  if (isset($_POST['formnews']))	{
    extract($_POST);

    if(isset($_SESSION['Mail'])){
      if ($_SESSION['Type'] == 'admin') {
        $author = 'Admin';
      } else {
        $q = $db->prepare("SELECT * FROM doctor_data WHERE Mail = :Mail");
        $q->execute(['Mail' => $_SESSION['Mail']]);
        $result = $q->fetch();

        $author = "Dr. ".$result['First_Name']." ".$result['Last_Name'];
      }
    } else {
      $author = 'Anonymous';
    }

    $q = $db->prepare("INSERT INTO news(message,date,author) VALUES(:message,:date,:author)");
    $q->execute([
      'message'=> $message,
      'date'=> $date,
      'author'=>$author
    ]);
    ?>
    <meta http-equiv="refresh" content="0.0001;URL=/CoronaTracks/corona_news_page.php">
    <?php
  }
 ?>
