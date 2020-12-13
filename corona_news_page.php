<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      require_once 'header.php';
      ?>
      <h1>Here is the place to tell new information, that you read or heard about the corona </h1>
      <form method="post">
        <input type="text" name="message">
        <input type="text" name="date" value="<?php echo time(); ?>" style="display:none" >
        <input type="submit" name="formnews" id="formnews" value="Submit">
      </form>
      <?php include 'corona_news.php'; ?>

      <?php
      $q= $db->prepare("SELECT * FROM news ORDER BY ID DESC");
      $q->execute();
      $result=$q->fetchall();

      date_default_timezone_set('Asia/Jerusalem');

      foreach ($result as $res) {
        ?>
        <div>
          <p>
            <span><?php echo $res['message']; ?></span>
            <span><?php echo date('m/d/Y H:i', $res['date']); ?></span>
          </p>

        </div>
        <?php
      }
       ?>

       <?php
         require_once 'footer.php';

         ?>

  </body>
</html>
