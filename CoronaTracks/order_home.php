<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
      #vac_test{
        text-align: center;
      }
      #lvaccin{
        font-size: 25px;
        color: white;
      }
     #ltest{
        font-size: 25px;
        color: white;
      
      }
      #order_type_submit{
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

      <form action="order_user_data.php" method="post">

        <p id="vac_test">
        <label id="lvaccin"> Order a Vaccin </label>
        <input type="radio" name="order_type" id="vaccin" value="vaccin" required><br>
        </p>

        <p id="vac_test">
          <label id="ltest">Order a Test </label>
          <input type="radio" name="order_type" id="test" value="test"><br>
        </p>

        <p id="vac_test">
          <input type="submit" name="order_type_submit" id="order_type_submit" class="button" value="Submit">
        </p>
      </form>
      <?php
        require_once 'footer.php';

        ?>
  </body>
</html>
