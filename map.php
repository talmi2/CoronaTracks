<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <style media="screen">
        .map_stat{
          display: inline-flex;
        }

        .img_map{
          width: 150px;
          height: 150px;
        }

        #A{
          display: flex;
          margin: 0px;
        }

        #A li{
          margin-right: 4px;
        }

        #A li:hover{
          border: 2px solid;
        }

        #B{
          display: flex;
          margin: 0px;
        }

        #B li{
          margin-right: 4px;
        }

        #B li:hover{
          border: 2px solid;
        }

        #C{
          display: flex;
          margin: 0px;
        }

        #C li{
          margin-right: 4px;
        }

        #C li:hover{
          border: 2px solid;
        }

        #D{
          display: flex;
          margin: 0px;
        }

        #D li{
          margin-right: 4px;
        }

        #D li:hover{
          border: 2px solid;
        }

        .img_color_A{
          width: 29px;
          height: 29px;
          position: absolute;
          bottom: 61.5%;
          padding-left: 121px;
          z-index: 1;
        }

        .img_color_B{
          width: 29px;
          height: 29px;
          position: absolute;
          bottom: 37%;
          padding-left: 121px;
          z-index: 1;
        }

        .img_color_C{
          width: 29px;
          height: 29px;
          position: absolute;
          bottom: 12%;
          padding-left: 121px;
          z-index: 1;
        }

        .img_color_D{
          width: 29px;
          height: 29px;
          position: absolute;
          bottom: -12.7%;
          padding-left: 121px;
          z-index: 1;
        }

        .stat{
          color: white;
          text-align: center;
          padding-left: 70px;
          height: 50%;

        }

        .img_color_city{
          border: 2px solid black;
          width: 25px;
          height: 25px;
        }

    </style>

  </head>
  <body>
    <?php
      require_once 'header.php';
      ?>

      <div class="map_stat">
        <div class="map">
          <ul id="A" class="A">
            <li>
              <?php $q= $db->prepare("SELECT * FROM map WHERE name = :name");
              $q->execute([
                'name' => 'case_A1'
              ]);
              $result=$q->fetch();?>

              <form class="A1" action="add_click.php" method="post">
              <input type="text" name="case" value="A1" style="display:none">
              <?php
                if($result['nb_click'] > 20) {
                  ?>
                  <input type="image" name="red" class="img_color_A" src="img_map/red_square.png"><input type="image" name="A1" class="img_map" src="img_map/case_A1.png"></input></input>
                  <?php
                } elseif ($result['nb_click'] > 10) {
                  ?>
                  <input type="image" name="orange" class="img_color_A" src="img_map/orange_square.png"><input type="image" name="A1" class="img_map" src="img_map/case_A1.png"></input></input>
                  <?php
                } else {
                  ?>
                  <input type="image" name="green" class="img_color_A" src="img_map/green_square.png"><input type="image" name="A1" class="img_map" src="img_map/case_A1.png"></input></input>
                  <?php
                }
              ?>
              </form></li>

            <li>
              <?php $q= $db->prepare("SELECT * FROM map WHERE name = :name");
              $q->execute([
                'name' => 'case_A2'
              ]);
              $result=$q->fetch();?>
              <form class="A2" action="add_click.php" method="post">
              <input type="text" name="case" value="A2" style="display:none">
            <?php
              if($result['nb_click'] > 20) {
                ?>
                <input type="image" name="red" class="img_color_A" src="img_map/red_square.png"><input type="image" name="A2" class="img_map" src="img_map/case_A2.png"></input></input>
                <?php
              } elseif ($result['nb_click'] > 10) {
                ?>
                <input type="image" name="orange" class="img_color_A" src="img_map/orange_square.png"><input type="image" name="A2" class="img_map" src="img_map/case_A2.png"></input></input>
                <?php
              } else {
                ?>
                <input type="image" name="green" class="img_color_A" src="img_map/green_square.png"><input type="image" name="A2" class="img_map" src="img_map/case_A2.png"></input></input>
                <?php
              }
            ?></form></li>

            <li>
              <?php $q= $db->prepare("SELECT * FROM map WHERE name = :name");
              $q->execute([
                'name' => 'case_A3'
              ]);
              $result=$q->fetch();?>
              <form class="A3" action="add_click.php" method="post">
              <input type="text" name="case" value="A3" style="display:none">
            <?php
              if($result['nb_click'] > 20) {
                ?>
                <input type="image" name="red" class="img_color_A" src="img_map/red_square.png"><input type="image" name="A3" class="img_map" src="img_map/case_A3.png"></input></input>
                <?php
              } elseif ($result['nb_click'] > 10) {
                ?>
                <input type="image" name="orange" class="img_color_A" src="img_map/orange_square.png"><input type="image" name="A3" class="img_map" src="img_map/case_A3.png"></input></input>
                <?php
              } else {
                ?>
                <input type="image" name="green" class="img_color_A" src="img_map/green_square.png"><input type="image" name="A3" class="img_map" src="img_map/case_A3.png"></input></input>
                <?php
              }
            ?></form></li>

            <li>
              <?php $q= $db->prepare("SELECT * FROM map WHERE name = :name");
              $q->execute([
                'name' => 'case_A4'
              ]);
              $result=$q->fetch();?>
              <form class="A4" action="add_click.php" method="post">
              <input type="text" name="case" value="A4" style="display:none">
            <?php
              if($result['nb_click'] > 20) {
                ?>
                <input type="image" name="red" class="img_color_A" src="img_map/red_square.png"><input type="image" name="A4" class="img_map" src="img_map/case_A4.png"></input></input>
                <?php
              } elseif ($result['nb_click'] > 10) {
                ?>
                <input type="image" name="orange" class="img_color_A" src="img_map/orange_square.png"><input type="image" name="A4" class="img_map" src="img_map/case_A4.png"></input></input>
                <?php
              } else {
                ?>
                <input type="image" name="green" class="img_color_A" src="img_map/green_square.png"><input type="image" name="A4" class="img_map" src="img_map/case_A4.png"></input></input>
                <?php
              }
            ?> </form></li>

            <li>
              <?php $q= $db->prepare("SELECT * FROM map WHERE name = :name");
              $q->execute([
                'name' => 'case_A5'
              ]);
              $result=$q->fetch();?>
              <form class="A5" action="add_click.php" method="post">
              <input type="text" name="case" value="A5" style="display:none">
            <?php
              if($result['nb_click'] > 20) {
                ?>
                <input type="image" name="red" class="img_color_A" src="img_map/red_square.png"><input type="image" name="A5" class="img_map" src="img_map/case_A5.png"></input></input>
                <?php
              } elseif ($result['nb_click'] > 10) {
                ?>
                <input type="image" name="orange" class="img_color_A" src="img_map/orange_square.png"><input type="image" name="A5" class="img_map" src="img_map/case_A5.png"></input></input>
                <?php
              } else {
                ?>
                <input type="image" name="green" class="img_color_A" src="img_map/green_square.png"><input type="image" name="A5" class="img_map" src="img_map/case_A5.png"></input></input>
                <?php
              }
            ?></form></li>
          </ul>

          <!--------------------------------------------------------------------------------------------------------------->

          <ul id="B" class="B">
            <li>
              <?php $q= $db->prepare("SELECT * FROM map WHERE name = :name");
              $q->execute([
                'name' => 'case_B1'
              ]);
              $result=$q->fetch();?>
              <form class="B1" action="add_click.php" method="post">
              <input type="text" name="case" value="B1" style="display:none">
            <?php
              if($result['nb_click'] > 20) {
                ?>
                <input type="image" name="red" class="img_color_B" src="img_map/red_square.png"><input type="image" name="B1" class="img_map" src="img_map/case_B1.png"></input></input>
                <?php
              } elseif ($result['nb_click'] > 10) {
                ?>
                <input type="image" name="orange" class="img_color_B" src="img_map/orange_square.png"><input type="image" name="B1" class="img_map" src="img_map/case_B1.png"></input></input>
                <?php
              } else {
                ?>
                <input type="image" name="green" class="img_color_B" src="img_map/green_square.png"><input type="image" name="B1" class="img_map" src="img_map/case_B1.png"></input></input>
                <?php
              }
            ?>
          </form></li>

            <li>
              <?php $q= $db->prepare("SELECT * FROM map WHERE name = :name");
              $q->execute([
                'name' => 'case_B2'
              ]);
              $result=$q->fetch();?>
              <form class="B2" action="add_click.php" method="post">
              <input type="text" name="case" value="B2" style="display:none">
            <?php
              if($result['nb_click'] > 20) {
                ?>
                <input type="image" name="red" class="img_color_B" src="img_map/red_square.png"><input type="image" name="B2" class="img_map" src="img_map/case_B2.png"></input></input>
                <?php
              } elseif ($result['nb_click'] > 10) {
                ?>
                <input type="image" name="orange" class="img_color_B" src="img_map/orange_square.png"><input type="image" name="B2" class="img_map" src="img_map/case_B2.png"></input></input>
                <?php
              } else {
                ?>
                <input type="image" name="green" class="img_color_B" src="img_map/green_square.png"><input type="image" name="B2" class="img_map" src="img_map/case_B2.png"></input></input>
                <?php
              }
            ?>
          </form></li>

            <li>
              <?php $q= $db->prepare("SELECT * FROM map WHERE name = :name");
              $q->execute([
                'name' => 'case_B3'
              ]);
              $result=$q->fetch();?>
              <form class="B3" action="add_click.php" method="post">
              <input type="text" name="case" value="B3" style="display:none">
            <?php
              if($result['nb_click'] > 20) {
                ?>
                <input type="image" name="red" class="img_color_B" src="img_map/red_square.png"><input type="image" name="B3" class="img_map" src="img_map/case_B3.png"></input></input>
                <?php
              } elseif ($result['nb_click'] > 10) {
                ?>
                <input type="image" name="orange" class="img_color_B" src="img_map/orange_square.png"><input type="image" name="B3" class="img_map" src="img_map/case_B3.png"></input></input>
                <?php
              } else {
                ?>
                <input type="image" name="green" class="img_color_B" src="img_map/green_square.png"><input type="image" name="B3" class="img_map" src="img_map/case_B3.png"></input></input>
                <?php
              }
            ?>
          </form></li>

            <li>
              <?php $q= $db->prepare("SELECT * FROM map WHERE name = :name");
              $q->execute([
                'name' => 'case_B4'
              ]);
              $result=$q->fetch();?>
              <form class="B4" action="add_click.php" method="post">
              <input type="text" name="case" value="B4" style="display:none">
            <?php
              if($result['nb_click'] > 20) {
                ?>
                <input type="image" name="red" class="img_color_B" src="img_map/red_square.png"><input type="image" name="B4" class="img_map" src="img_map/case_B4.png"></input></input>
                <?php
              } elseif ($result['nb_click'] > 10) {
                ?>
                <input type="image" name="orange" class="img_color_B" src="img_map/orange_square.png"><input type="image" name="B4" class="img_map" src="img_map/case_B4.png"></input></input>
                <?php
              } else {
                ?>
                <input type="image" name="green" class="img_color_B" src="img_map/green_square.png"><input type="image" name="B4" class="img_map" src="img_map/case_B4.png"></input></input>
                <?php
              }
            ?>
          </form></li>

            <li>
              <?php $q= $db->prepare("SELECT * FROM map WHERE name = :name");
              $q->execute([
                'name' => 'case_B5'
              ]);
              $result=$q->fetch();?>
              <form class="B5" action="add_click.php" method="post">
              <input type="text" name="case" value="B5" style="display:none">
            <?php
              if($result['nb_click'] > 20) {
                ?>
                <input type="image" name="red" class="img_color_B" src="img_map/red_square.png"><input type="image" name="B5" class="img_map" src="img_map/case_B5.png"></input></input>
                <?php
              } elseif ($result['nb_click'] > 10) {
                ?>
                <input type="image" name="orange" class="img_color_B" src="img_map/orange_square.png"><input type="image" name="B5" class="img_map" src="img_map/case_B5.png"></input></input>
                <?php
              } else {
                ?>
                <input type="image" name="green" class="img_color_B" src="img_map/green_square.png"><input type="image" name="B5" class="img_map" src="img_map/case_B5.png"></input></input>
                <?php
              }
            ?>
          </form></li>
          </ul>

          <!--------------------------------------------------------------------------------------------------------------->

          <ul id="C" class="C">
            <li>
              <?php $q= $db->prepare("SELECT * FROM map WHERE name = :name");
              $q->execute([
                'name' => 'case_C1'
              ]);
              $result=$q->fetch();?>
              <form class="C1" action="add_click.php" method="post">
              <input type="text" name="case" value="C1" style="display:none">
            <?php
              if($result['nb_click'] > 20) {
                ?>
                <input type="image" name="red" class="img_color_C" src="img_map/red_square.png"><input type="image" name="C1" class="img_map" src="img_map/case_C1.png"></input></input>
                <?php
              } elseif ($result['nb_click'] > 10) {
                ?>
                <input type="image" name="orange" class="img_color_C" src="img_map/orange_square.png"><input type="image" name="C1" class="img_map" src="img_map/case_C1.png"></input></input>
                <?php
              } else {
                ?>
                <input type="image" name="green" class="img_color_C" src="img_map/green_square.png"><input type="image" name="C1" class="img_map" src="img_map/case_C1.png"></input></input>
                <?php
              }
            ?>
          </form></li>

            <li>
              <?php $q= $db->prepare("SELECT * FROM map WHERE name = :name");
              $q->execute([
                'name' => 'case_C2'
              ]);
              $result=$q->fetch();?>
              <form class="C2" action="add_click.php" method="post">
              <input type="text" name="case" value="C2" style="display:none">
            <?php
              if($result['nb_click'] > 20) {
                ?>
                <input type="image" name="red" class="img_color_C" src="img_map/red_square.png"><input type="image" name="C2" class="img_map" src="img_map/case_C2.png"></input></input>
                <?php
              } elseif ($result['nb_click'] > 10) {
                ?>
                <input type="image" name="orange" class="img_color_C" src="img_map/orange_square.png"><input type="image" name="C2" class="img_map" src="img_map/case_C2.png"></input></input>
                <?php
              } else {
                ?>
                <input type="image" name="green" class="img_color_C" src="img_map/green_square.png"><input type="image" name="C2" class="img_map" src="img_map/case_C2.png"></input></input>
                <?php
              }
            ?>
          </form></li>

            <li>
              <?php $q= $db->prepare("SELECT * FROM map WHERE name = :name");
              $q->execute([
                'name' => 'case_C3'
              ]);
              $result=$q->fetch();?>
              <form class="C3" action="add_click.php" method="post">
              <input type="text" name="case" value="C3" style="display:none">
            <?php
              if($result['nb_click'] > 20) {
                ?>
                <input type="image" name="red" class="img_color_C" src="img_map/red_square.png"><input type="image" name="C3" class="img_map" src="img_map/case_C3.png"></input></input>
                <?php
              } elseif ($result['nb_click'] > 10) {
                ?>
                <input type="image" name="orange" class="img_color_C" src="img_map/orange_square.png"><input type="image" name="C3" class="img_map" src="img_map/case_C3.png"></input></input>
                <?php
              } else {
                ?>
                <input type="image" name="green" class="img_color_C" src="img_map/green_square.png"><input type="image" name="C3" class="img_map" src="img_map/case_C3.png"></input></input>
                <?php
              }
            ?>
          </form></li>

            <li>
              <?php $q= $db->prepare("SELECT * FROM map WHERE name = :name");
              $q->execute([
                'name' => 'case_C4'
              ]);
              $result=$q->fetch();?>
              <form class="C4" action="add_click.php" method="post">
              <input type="text" name="case" value="C4" style="display:none">
            <?php
              if($result['nb_click'] > 20) {
                ?>
                <input type="image" name="red" class="img_color_C" src="img_map/red_square.png"><input type="image" name="C4" class="img_map" src="img_map/case_C4.png"></input></input>
                <?php
              } elseif ($result['nb_click'] > 10) {
                ?>
                <input type="image" name="orange" class="img_color_C" src="img_map/orange_square.png"><input type="image" name="C4" class="img_map" src="img_map/case_C4.png"></input></input>
                <?php
              } else {
                ?>
                <input type="image" name="green" class="img_color_C" src="img_map/green_square.png"><input type="image" name="C4" class="img_map" src="img_map/case_C4.png"></input></input>
                <?php
              }
            ?>
          </form></li>

            <li>
              <?php $q= $db->prepare("SELECT * FROM map WHERE name = :name");
              $q->execute([
                'name' => 'case_C5'
              ]);
              $result=$q->fetch();?>
              <form class="C5" action="add_click.php" method="post">
              <input type="text" name="case" value="C5" style="display:none">
            <?php
              if($result['nb_click'] > 20) {
                ?>
                <input type="image" name="red" class="img_color_C" src="img_map/red_square.png"><input type="image" name="C5" class="img_map" src="img_map/case_C5.png"></input></input>
                <?php
              } elseif ($result['nb_click'] > 10) {
                ?>
                <input type="image" name="orange" class="img_color_C" src="img_map/orange_square.png"><input type="image" name="C5" class="img_map" src="img_map/case_C5.png"></input></input>
                <?php
              } else {
                ?>
                <input type="image" name="green" class="img_color_C" src="img_map/green_square.png"><input type="image" name="C5" class="img_map" src="img_map/case_C5.png"></input></input>
                <?php
              }
            ?>
          </form></li>
          </ul>

          <!--------------------------------------------------------------------------------------------------------------->

          <ul id="D" class="D">
            <li>
              <?php $q= $db->prepare("SELECT * FROM map WHERE name = :name");
              $q->execute([
                'name' => 'case_D1'
              ]);
              $result=$q->fetch();?>
              <form class="D1" action="add_click.php" method="post">
              <input type="text" name="case" value="D1" style="display:none">
            <?php
              if($result['nb_click'] > 20) {
                ?>
                <input type="image" name="red" class="img_color_D" src="img_map/red_square.png"><input type="image" name="D1" class="img_map" src="img_map/case_D1.png"></input></input>
                <?php
              } elseif ($result['nb_click'] > 10) {
                ?>
                <input type="image" name="orange" class="img_color_D" src="img_map/orange_square.png"><input type="image" name="D1" class="img_map" src="img_map/case_D1.png"></input></input>
                <?php
              } else {
                ?>
                <input type="image" name="green" class="img_color_D" src="img_map/green_square.png"><input type="image" name="D1" class="img_map" src="img_map/case_D1.png"></input></input>
                <?php
              }
            ?>
          </form></li>

            <li>
              <?php $q= $db->prepare("SELECT * FROM map WHERE name = :name");
              $q->execute([
                'name' => 'case_D2'
              ]);
              $result=$q->fetch();?>
              <form class="D2" action="add_click.php" method="post">
              <input type="text" name="case" value="D2" style="display:none">
            <?php
              if($result['nb_click'] > 20) {
                ?>
                <input type="image" name="red" class="img_color_D" src="img_map/red_square.png"><input type="image" name="D2" class="img_map" src="img_map/case_D2.png"></input></input>
                <?php
              } elseif ($result['nb_click'] > 10) {
                ?>
                <input type="image" name="orange" class="img_color_D" src="img_map/orange_square.png"><input type="image" name="D2" class="img_map" src="img_map/case_D2.png"></input></input>
                <?php
              } else {
                ?>
                <input type="image" name="green" class="img_color_D" src="img_map/green_square.png"><input type="image" name="D2" class="img_map" src="img_map/case_D2.png"></input></input>
                <?php
              }
            ?>
          </form></li>

            <li>
              <?php $q= $db->prepare("SELECT * FROM map WHERE name = :name");
              $q->execute([
                'name' => 'case_D3'
              ]);
              $result=$q->fetch();?>
              <form class="D3" action="add_click.php" method="post">
              <input type="text" name="case" value="D3" style="display:none">
            <?php
              if($result['nb_click'] > 20) {
                ?>
                <input type="image" name="red" class="img_color_D" src="img_map/red_square.png"><input type="image" name="D3" class="img_map" src="img_map/case_D3.png"></input></input>
                <?php
              } elseif ($result['nb_click'] > 10) {
                ?>
                <input type="image" name="orange" class="img_color_D" src="img_map/orange_square.png"><input type="image" name="D3" class="img_map" src="img_map/case_D3.png"></input></input>
                <?php
              } else {
                ?>
                <input type="image" name="green" class="img_color_D" src="img_map/green_square.png"><input type="image" name="D3" class="img_map" src="img_map/case_D3.png"></input></input>
                <?php
              }
            ?>
          </form></li>

            <li>
              <?php $q= $db->prepare("SELECT * FROM map WHERE name = :name");
              $q->execute([
                'name' => 'case_D4'
              ]);
              $result=$q->fetch();?>
              <form class="D4" action="add_click.php" method="post">
              <input type="text" name="case" value="D4" style="display:none">
            <?php
              if($result['nb_click'] > 20) {
                ?>
                <input type="image" name="red" class="img_color_D" src="img_map/red_square.png"><input type="image" name="D4" class="img_map" src="img_map/case_D4.png"></input></input>
                <?php
              } elseif ($result['nb_click'] > 10) {
                ?>
                <input type="image" name="orange" class="img_color_D" src="img_map/orange_square.png"><input type="image" name="D4" class="img_map" src="img_map/case_D4.png"></input></input>
                <?php
              } else {
                ?>
                <input type="image" name="green" class="img_color_D" src="img_map/green_square.png"><input type="image" name="D4" class="img_map" src="img_map/case_D4.png"></input></input>
                <?php
              }
            ?>
          </form></li>

            <li>
              <?php $q= $db->prepare("SELECT * FROM map WHERE name = :name");
              $q->execute([
                'name' => 'case_D5'
              ]);
              $result=$q->fetch();?>
              <form class="D5" action="add_click.php" method="post">
              <input type="text" name="case" value="D5" style="display:none">
            <?php
              if($result['nb_click'] > 20) {
                ?>
                <input type="image" name="red" class="img_color_D" src="img_map/red_square.png"><input type="image" name="D5" class="img_map" src="img_map/case_D5.png"></input></input>
                <?php
              } elseif ($result['nb_click'] > 10) {
                ?>
                <input type="image" name="orange" class="img_color_D" src="img_map/orange_square.png"><input type="image" name="D5" class="img_map" src="img_map/case_D5.png"></input></input>
                <?php
              } else {
                ?>
                <input type="image" name="green" class="img_color_D" src="img_map/green_square.png"><input type="image" name="D5" class="img_map" src="img_map/case_D5.png"></input></input>
                <?php
              }
            ?>
          </form></li>
          </ul>

          <!--------------------------------------------------------------------------------------------------------------->
        </div>
        <div class="stat">
          <?php $q= $db->prepare("SELECT nb_click FROM map");
          $q->execute();
          //$result=$q->fetchall();
          //$nb_line = $q->rowCount();
          $total_click = 0;

          while ($res = $q->fetch()) {
            $total_click = $total_click + $res['nb_click'];
          }

          ?>

          <span>The total of sick people in Beer-sheva is: <?php echo $total_click; ?></span><br>
          <span>Overall city situation:</span>
          <?php if ($total_click > 220){ ?>
            <img name="red" class="img_color_city" src="img_map/red_square.png" alt="red_square">
          <?php } elseif ($total_click > 110) {?>
            <img name="orange" class="img_color_city" src="img_map/orange_square.png" alt="orange_square">
          <?php } else {?>
            <img name="green" class="img_color_city" src="img_map/green_square.png" alt="green_square">
          <?php } ?>

        </div>
      </div>

      <?php
        require_once 'footer.php';
        ?>
  </body>
</html>
