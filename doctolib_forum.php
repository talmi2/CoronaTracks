<?php
  if (isset($_POST['form_doctolib']))	{
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

    $q = $db->prepare("INSERT INTO doctolib_forum(message,date,topic,author) VALUES(:message,:date,:topic,:author)");
    $q->execute([
      'message'=> $message,
      'date'=> $date,
      'topic'=> $topic,
      'author'=> $author
    ]);

    $a = $db->prepare("UPDATE doctolib_sub SET last_modif='".$date."' WHERE subject = :subject");
    $a->execute([
      'subject'=> $topic
    ]);
    ?>
    <meta http-equiv="refresh" content="0.0001;URL=/CoronaTracks/doctolib_forum_page.php?topic=<?php echo $_GET['topic']; ?>">
    <?php
  }
 ?>

