<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      body{
      background-color: #364061;
      text-align: center;
    
    }
    h2{
      color:white;
    }
    #id{
      width: 240px;
      display:inline-block;
    }
    
      #firstname{
      width: 240px;
      display:inline-block;
    
    }
      #lastname{
      width: 240px;
      display:inline-block;
    
    }
      #lemail{
      width: 240px;
      display:inline-block;
    
    }
      #ladress{
      width: 240px;
      display:inline-block;
    }
      #ltel{
      width: 240px;
      display:inline-block;
    }
      #lquantity{
      width: 240px;
      display:inline-block;
    }
    .button{
      width: 100px;
      border: 3px solid #364061;
      padding: 10px;

    }
    </style>
  </head>
  <body>
    <?php
      require_once 'header.php';

      if (isset($_POST['order_type_submit'])){

        extract($_POST);

        ?>
        <h2>Enter your data to order a <?php echo $order_type; ?></h2>
        <form action="order_confirmation.php" method="post">
          <label id="id">ID:</label>
          <input type="id" name="id" id="id" placeholder="ID" min="9" maxlength="9" required><br>

          <label id="firstname">First name:</label>
          <input type="firstname" name="first_name" id="firstname" placeholder="First Name" required><br>

          <label id="lastname">Last name:</label>
          <input type="lastname" name="last_name" id="lastname" placeholder="Last Name" required><br>

          <label id="lemail">Mail:</label>
          <input type="email" name="email" id="email" placeholder="Mail" required><br>

          <label id="ladress">Adress:</label>
          <input type="adress" name="adress" id="adress" placeholder="Adress" required><br>

          <label id="ltel">Tel:</label>
          <input type="tel" name="tel" id="tel" placeholder="tel" required><br>

          <label id="lquantity">Quantity:</label>
          <input type="quantity" name="quantity" id="quantity" placeholder="quantity" maxlength="1" required><br>

          <input type="order_type" name="order_type" id="order_type" value="<?php echo $order_type; ?>" style="display:none" required>

          <input type="submit" name="order" id="order" class="button">
        </form>
        <?php
      }
      ?>
      <?php
    		require_once 'footer.php';

    		?>

  </body>
</html>
