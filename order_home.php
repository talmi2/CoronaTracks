<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      require_once 'header.php';
      ?>

      <form action="order_user_data.php" method="post">
        <label id="lvaccin">Order a Vaccin</label>
        <input type="radio" name="order_type" id="vaccin" value="vaccin" required><br>
        <label id="ltest">Order a Test</label>
        <input type="radio" name="order_type" id="test" value="test"><br>

        <input type="submit" name="order_type_submit" id="order_type_submit">
      </form>
  </body>
</html>
