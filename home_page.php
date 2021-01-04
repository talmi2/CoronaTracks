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
          <p id="home" class="home">
            <span id="message" class="message"><?php echo $res['message']; ?></span>
            <span id="date" class="date"><?php echo date('m/d/Y H:i', $res['date']); ?></span>
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
