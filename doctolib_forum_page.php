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
    #message{
      color: white;
    }
    #date{
      color: white;

    }
    #home{
       border-width:5px;
      border-style:solid;
      border-color:#2b334e;
      background-color: #2b334e;
    }
    #formmessage{
  display: inline-block;
  border-radius: 4px;
  background-color: #1E90FF;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding: 14px;
  width: 80px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;

}

    </style>
  </head>
  <body>
    <?php
      require_once 'header.php';
      ?>

      <h1><?php echo $_GET['topic']; ?></h1>

      <form method="post">
        <input type="text" name="message" required>
        <input type="text" name="date" value="<?php echo time(); ?>" style="display:none" >
        <input type="text" name="topic" value="<?php echo $_GET['topic']; ?>" style="display:none" >
        <input type="submit" name="form_doctolib" id="form_doctolib" value="Submit">
      </form>
      <?php include 'doctolib_forum.php'; ?>


      <?php
      $q= $db->prepare("SELECT * FROM doctolib_forum WHERE topic = :topic ORDER BY ID DESC");
      $q->execute(['topic' => $_GET['topic']]);
      $result=$q->fetchall();

      date_default_timezone_set('Asia/Jerusalem');

      foreach ($result as $res) {
        if($res['author'] == 'Admin'){
        ?>
        <div>
          <p id="doctolib_forum_admin" class="doctolib_forum_admin">
            <span id="message_admin" class="message_admin"><?php echo $res['message']; ?></span>
            <span id="author_admin" class="author_admin"><?php echo $res['author']; ?></span>
            <span id="date_admin" class="date_admin"><?php echo date('m/d/Y H:i', $res['date']); ?></span>

            <?php
            if (isset($_SESSION['Type'])) {
              if ($_SESSION['Type'] == 'admin'){
                ?>
                <form class="form_remove" method="post">
                  <input type="text" name="Id" value = "<?php echo $res['ID'];?>" style=display:none >
                  <button type="submit" name="remove" value="Remove" id="remove">Remove</button>

                </form>

                  <?php
                      include 'remove_doctolib_forum.php';
                      }
                    }
             ?>
          </p>

        </div>
        <?php
      } elseif($res['author'] != 'Anonymous'){
        ?>
        <div>
          <p id="doctolib_forum_doc" class="doctolib_forum_doc">
            <span id="message_doc" class="message_doc"><?php echo $res['message']; ?></span>
            <span id="author_doc" class="author_doc"><?php echo $res['author']; ?></span>
            <span id="date_doc" class="date_doc"><?php echo date('m/d/Y H:i', $res['date']); ?></span>

            <?php
            if (isset($_SESSION['Type'])) {
              if ($_SESSION['Type'] == 'admin'){
                ?>
                <form class="form_remove" method="post">
                  <input type="text" name="Id" value = "<?php echo $res['ID'];?>" style=display:none >
                  <button type="submit" name="remove" value="Remove" id="remove">Remove</button>

                </form>

                  <?php
                      include 'remove_doctolib_forum.php';
                      }
                    }
             ?>
          </p>

        </div>
        <?php
      } else {
        ?>
        <div>
          <p id="doctolib_forum" class="doctolib_forum">
            <span id="message" class="message"><?php echo $res['message']; ?></span>
            <span id="author" class="author"><?php echo $res['author']; ?></span>
            <span id="date" class="date"><?php echo date('m/d/Y H:i', $res['date']); ?></span>

            <?php
            if (isset($_SESSION['Type'])) {
              if ($_SESSION['Type'] == 'admin'){
                ?>
                <form class="form_remove" method="post">
                  <input type="text" name="Id" value = "<?php echo $res['ID'];?>" style=display:none >
                  <button type="submit" name="remove" value="Remove" id="remove">Remove</button>

                </form>

                  <?php
                      include 'remove_doctolib_forum.php';
                      }
                    }
             ?>
          </p>

        </div>
        <?php
      }
      }
       ?>
       <?php
         require_once 'footer.php';

         ?>

  </body>
</html>
