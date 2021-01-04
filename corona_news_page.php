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
      color: white;
    }
     #formnews{
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
#remove{
  display: inline-block;
  border-radius: 4px;
  background-color: #1E90FF;
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
 #msg{
      color: white;
    }
    </style>
  </head>
  <body>
    <?php
      require_once 'header.php';
      ?>
      <h1>Write down the latest information about the Covid-19: </h1>
      <div id="msg">
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
            <?php
            if ($_SESSION['Type'] == 'admin'){
              ?>
              <form class="form_remove" action="remove_news.php" method="post">
                <input type="text" name="Id" value = "<?php echo $res['ID'];?>" style=display:none >
                <button type="submit" name="remove" value="Remove" id="remove">Remove</button>

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
