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

#home,#home_doc,#home_admin{
  border-width: 15px;
    border-style: solid;
    border-color: #2b334e;
    background-color: #2b334e;
    color: white;
}
#author_admin{
  color: red;
}
#author_doc{
  color:#00FF00;
}
#remove{
  display: inline-block;
  border-radius: 4px;
  background-color: #B22222;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 8px;
  padding: 7px;
  width: 40px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 2px;
}

    </style>
  </head>
  <body>
    <?php
      require_once 'header.php';
      ?>

      <h1>If you are sick or covid-positive, please write down which places did you visit for the last days: </h1>
      <form method="post">
        <input type="text" name="message" required>
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
        if ($res['author'] == "Admin") {
        ?>
        <div>
          <p id="home_admin" class="home_admin">
            <span id="message_admin" class="message_admin"><?php echo $res['message']; ?></span>
            <span id="author_admin" class="author_admin"><?php echo $res['author']; ?></span>
            <span id="date_admin" class="date_admin"><?php echo date('m/d/Y H:i', $res['date']); ?></span>

            <?php
            if (isset($_SESSION['Type'])) {
              if ($_SESSION['Type'] == 'admin'){
                ?>
                <form class="form_remove" action="remove_home.php" method="post">
                  <input type="text" name="Id" value = "<?php echo $res['ID'];?>" style=display:none >
                  <button type="submit" name="remove" value="Remove" id="remove">Remove</button>

                </form>
                  <?php
                      }
                    }
             ?>
          </p>

        </div>
        <?php
       } elseif ($res['author'] != "Anonymous") {
        ?>
        <div>
          <p id="home_doc" class="home_doc">
            <span id="message_doc" class="message_doc"><?php echo $res['message']; ?></span>
            <span id="author_doc" class="author_doc"><?php echo $res['author']; ?></span>
            <span id="date_doc" class="date_doc"><?php echo date('m/d/Y H:i', $res['date']); ?></span>

            <?php
            if (isset($_SESSION['Type'])) {
              if ($_SESSION['Type'] == 'admin'){
                ?>
                <form class="form_remove" action="remove_home.php" method="post">
                  <input type="text" name="Id" value = "<?php echo $res['ID'];?>" style=display:none >
                  <button type="submit" name="remove" value="Remove" id="remove">Remove</button>

                </form>
                  <?php
                      }
                    }
             ?>
          </p>

        </div>
        <?php
       } else {
          ?>
        <div>
          <p id="home" class="home">
            <span id="message" class="message"><?php echo $res['message']; ?></span>
            <span id="author" class="author"><?php echo $res['author']; ?></span>
            <span id="date" class="date"><?php echo date('m/d/Y H:i', $res['date']); ?></span>

            <?php
            if (isset($_SESSION['Type'])) {
              if ($_SESSION['Type'] == 'admin'){
                ?>
                <form class="form_remove" action="remove_home.php" method="post">
                  <input type="text" name="Id" value = "<?php echo $res['ID'];?>" style=display:none >
                  <button type="submit" name="remove" value="Remove" id="remove">Remove</button>

                </form>
                  <?php
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
