<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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

        echo "Order succeed, the $order_type is in this way to you";
      }
      ?>
      <?php
        require_once 'footer.php';

        ?>
  </body>
</html>
