<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>


      body{
      background-color: #364061;
      text-align: center;
    }
    h1{
      color:white;
    }

    </style>
  </head>
  <body>
    <?php
      require_once 'header.php';
      ?>

      <h1>If you are sick or covid-positive, please write down which places did you visit for the last days: </h1>
      <form method="post">
        <input type="text" name="message">
        <input type="text" name="date" value="<?php echo time(); ?>" style="display:none" >
        <input type="submit" name="formmessage" id="formmessage" value="Submit">
      </form>
      <?php include 'home.php'; ?>

      <?php
      $q= $db->prepare("SELECT * FROM message_stocking ORDER BY ID DESC");
      $q->execute();
      $result=$q->fetchall();

      date_default_timezone_set('Asia/Jerusalem');

      foreach ($result as $res) {
        ?>
        <div>
          <p>
            <span><?php echo $res['message']; ?></span>
            <span><?php echo date('m/d/Y H:i', $res['date']); ?></span>
            <?php
            if ($_SESSION['Type'] == 'admin'){
              ?>
              <form class="form_remove" action="remove_home.php" method="post">
                <input type="text" name="Id" value = "<?php echo $res['ID'];?>" style=display:none >
                <button type="submit" name="remove" value="Remove">Remove</button>

              </form>
                <?php
                    }
             ?>
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
