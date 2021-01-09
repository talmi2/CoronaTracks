<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      #order_succeed{
        color:white;
      }
    </style>
  </head>
  <body>
    <?php
      require_once 'header.php';

      if (isset($_POST['order'])){

        extract($_POST);

        $q = $db->prepare("INSERT INTO User_data(ID,First_Name,Last_Name,Mail,Adress,tel,quantity,Type) VALUES(:ID,:First_Name,:Last_Name,:Mail,:Adress,:tel,:quantity,:Type)");
        $q->execute([
          'ID' => $id,
          'First_Name'=> $first_name,
          'Last_Name'=> $last_name,
          'Mail' => $email,
          'Adress'=> $adress,
          'tel' => $tel,
          'quantity' => $quantity,
          'Type'=> $order_type
        ]);

        ?>
        <span id="order_succeed" class="order_succeed"><?php echo "Successful Order, the $order_type is on its way to you."; ?></span>
        <?php
        
      }
      ?>
      <?php
        require_once 'footer.php';

        ?>
  </body>
</html>
