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
    h3{
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
#subj,#mess{
  color: white;
  font-size: 20px;
}
#form_doctolib_sub{
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
#doctolib_home{
  border-width: 10px;
    border-style: solid;
    border-color: #4682B4;
    background-color: #4682B4;
    color: white;
}
#link:link {color:#FFFFFF;}
#link:visited {color:#FFFFFF;}
#link:hover {font-size:150%;}
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

      <h1>DOCTOLIB Forum</h1>


      <h3>New Topic</h3>
      <form method="post">
        <label id="subj">Topic's name: </label>
        <input type="text" name="subject" required>

        <label id="mess">Message: </label>
        <input type="text" name="message" required>
        <input type="text" name="date" value="<?php echo time(); ?>" style="display:none" >
        <input type="submit" name="form_doctolib_sub" id="form_doctolib_sub" value="Post">
      </form>
      <?php include 'doctolib_home.php'; ?>


      <?php
      $q= $db->prepare("SELECT * FROM doctolib_sub ORDER BY ID DESC");
      $q->execute();
      $result=$q->fetchall();

      date_default_timezone_set('Asia/Jerusalem');

      foreach ($result as $res) {
        ?>
        <div>
          <p id="doctolib_home" class="doctolib_home">
            <span id="subject" class="subject"><a id="link" href="doctolib_forum_page.php?topic=<?php echo $res['subject']; ?>"><?php echo $res['subject']; ?></a></span>
            <span id="author" class="author"><?php echo $res['author']; ?></span>
            <span id="date" class="date"><?php echo date('m/d/Y H:i', $res['last_modif']); ?></span>

            <?php
            if (isset($_SESSION['Type'])) {
              if ($_SESSION['Type'] == 'admin'){
                ?>
                <form class="form_remove" action="remove_doctolib_home.php" method="post">
                  <input type="text" name="Id" value = "<?php echo $res['ID'];?>" style=display:none >
                  <input type="text" name="subject" value = "<?php echo $res['subject'];?>" style=display:none >
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
       ?>
       <?php
         require_once 'footer.php';

         ?>

  </body>
</html>
