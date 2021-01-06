<?php
  if (isset($_POST['form_doctolib_sub']))	{
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

    $q = $db->prepare("INSERT INTO doctolib_sub(subject, last_modif, author) VALUES(:subject, :last_modif, :author)");
    $q->execute([
      'subject'=> $subject,
      'last_modif' => $date,
      'author' => $author
    ]);

    $a = $db->prepare("INSERT INTO doctolib_forum(message,date,topic,author) VALUES(:message,:date,:topic,:author)");
    $a->execute([
      'message'=> $message,
      'date'=> $date,
      'topic'=> $subject,
      'author' => $author
    ]); 

    ?>
    <meta http-equiv="refresh" content="0.0001;URL=/CoronaTracks/doctolib_home_page.php">
    <?php
  }
 ?>
