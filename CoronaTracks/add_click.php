<?php
  require_once 'header.php';

  if($_POST['case'] == 'A1'){
    $q= $db->prepare("SELECT * FROM map WHERE name = :name");
    $q->execute([
      'name' => 'case_A1'
    ]);
    $result=$q->fetch();

    $nb_click = $result['nb_click'] + 1;

    $a = $db->prepare("UPDATE map SET nb_click='".$nb_click."' WHERE name = :name");
    $a->execute([
      'name' => 'case_A1'
    ]);
  } elseif ($_POST['case'] == 'A2') {
    $q= $db->prepare("SELECT * FROM map WHERE name = :name");
    $q->execute([
      'name' => 'case_A2'
    ]);
    $result=$q->fetch();

    $nb_click = $result['nb_click'] + 1;

    $a = $db->prepare("UPDATE map SET nb_click='".$nb_click."' WHERE name = :name");
    $a->execute([
      'name' => 'case_A2'
    ]);
  } elseif ($_POST['case'] == 'A3') {
    $q= $db->prepare("SELECT * FROM map WHERE name = :name");
    $q->execute([
      'name' => 'case_A3'
    ]);
    $result=$q->fetch();

    $nb_click = $result['nb_click'] + 1;

    $a = $db->prepare("UPDATE map SET nb_click='".$nb_click."' WHERE name = :name");
    $a->execute([
      'name' => 'case_A3'
    ]);
  } elseif ($_POST['case'] == 'A4') {
    $q= $db->prepare("SELECT * FROM map WHERE name = :name");
    $q->execute([
      'name' => 'case_A4'
    ]);
    $result=$q->fetch();

    $nb_click = $result['nb_click'] + 1;

    $a = $db->prepare("UPDATE map SET nb_click='".$nb_click."' WHERE name = :name");
    $a->execute([
      'name' => 'case_A4'
    ]);
  } elseif ($_POST['case'] == 'A5') {
    $q= $db->prepare("SELECT * FROM map WHERE name = :name");
    $q->execute([
      'name' => 'case_A5'
    ]);
    $result=$q->fetch();

    $nb_click = $result['nb_click'] + 1;

    $a = $db->prepare("UPDATE map SET nb_click='".$nb_click."' WHERE name = :name");
    $a->execute([
      'name' => 'case_A5'
    ]);
  } elseif ($_POST['case'] == 'B1') {
    $q= $db->prepare("SELECT * FROM map WHERE name = :name");
    $q->execute([
      'name' => 'case_B1'
    ]);
    $result=$q->fetch();

    $nb_click = $result['nb_click'] + 1;

    $a = $db->prepare("UPDATE map SET nb_click='".$nb_click."' WHERE name = :name");
    $a->execute([
      'name' => 'case_B1'
    ]);
  } elseif ($_POST['case'] == 'B2') {
    $q= $db->prepare("SELECT * FROM map WHERE name = :name");
    $q->execute([
      'name' => 'case_B2'
    ]);
    $result=$q->fetch();

    $nb_click = $result['nb_click'] + 1;

    $a = $db->prepare("UPDATE map SET nb_click='".$nb_click."' WHERE name = :name");
    $a->execute([
      'name' => 'case_B2'
    ]);
  } elseif ($_POST['case'] == 'B3') {
    $q= $db->prepare("SELECT * FROM map WHERE name = :name");
    $q->execute([
      'name' => 'case_B3'
    ]);
    $result=$q->fetch();

    $nb_click = $result['nb_click'] + 1;

    $a = $db->prepare("UPDATE map SET nb_click='".$nb_click."' WHERE name = :name");
    $a->execute([
      'name' => 'case_B3'
    ]);
  } elseif ($_POST['case'] == 'B4') {
    $q= $db->prepare("SELECT * FROM map WHERE name = :name");
    $q->execute([
      'name' => 'case_B4'
    ]);
    $result=$q->fetch();

    $nb_click = $result['nb_click'] + 1;

    $a = $db->prepare("UPDATE map SET nb_click='".$nb_click."' WHERE name = :name");
    $a->execute([
      'name' => 'case_B4'
    ]);
  } elseif ($_POST['case'] == 'B5') {
    $q= $db->prepare("SELECT * FROM map WHERE name = :name");
    $q->execute([
      'name' => 'case_B5'
    ]);
    $result=$q->fetch();

    $nb_click = $result['nb_click'] + 1;

    $a = $db->prepare("UPDATE map SET nb_click='".$nb_click."' WHERE name = :name");
    $a->execute([
      'name' => 'case_B5'
    ]);
  } elseif ($_POST['case'] == 'C1') {
    $q= $db->prepare("SELECT * FROM map WHERE name = :name");
    $q->execute([
      'name' => 'case_C1'
    ]);
    $result=$q->fetch();

    $nb_click = $result['nb_click'] + 1;

    $a = $db->prepare("UPDATE map SET nb_click='".$nb_click."' WHERE name = :name");
    $a->execute([
      'name' => 'case_C1'
    ]);
  } elseif ($_POST['case'] == 'C2') {
    $q= $db->prepare("SELECT * FROM map WHERE name = :name");
    $q->execute([
      'name' => 'case_C2'
    ]);
    $result=$q->fetch();

    $nb_click = $result['nb_click'] + 1;

    $a = $db->prepare("UPDATE map SET nb_click='".$nb_click."' WHERE name = :name");
    $a->execute([
      'name' => 'case_C2'
    ]);
  } elseif ($_POST['case'] == 'C3') {
    $q= $db->prepare("SELECT * FROM map WHERE name = :name");
    $q->execute([
      'name' => 'case_C3'
    ]);
    $result=$q->fetch();

    $nb_click = $result['nb_click'] + 1;

    $a = $db->prepare("UPDATE map SET nb_click='".$nb_click."' WHERE name = :name");
    $a->execute([
      'name' => 'case_C3'
    ]);
  } elseif ($_POST['case'] == 'C4') {
    $q= $db->prepare("SELECT * FROM map WHERE name = :name");
    $q->execute([
      'name' => 'case_C4'
    ]);
    $result=$q->fetch();

    $nb_click = $result['nb_click'] + 1;

    $a = $db->prepare("UPDATE map SET nb_click='".$nb_click."' WHERE name = :name");
    $a->execute([
      'name' => 'case_C4'
    ]);
  } elseif ($_POST['case'] == 'C5') {
    $q= $db->prepare("SELECT * FROM map WHERE name = :name");
    $q->execute([
      'name' => 'case_C5'
    ]);
    $result=$q->fetch();

    $nb_click = $result['nb_click'] + 1;

    $a = $db->prepare("UPDATE map SET nb_click='".$nb_click."' WHERE name = :name");
    $a->execute([
      'name' => 'case_C5'
    ]);
  } elseif ($_POST['case'] == 'D1') {
    $q= $db->prepare("SELECT * FROM map WHERE name = :name");
    $q->execute([
      'name' => 'case_D1'
    ]);
    $result=$q->fetch();

    $nb_click = $result['nb_click'] + 1;

    $a = $db->prepare("UPDATE map SET nb_click='".$nb_click."' WHERE name = :name");
    $a->execute([
      'name' => 'case_D1'
    ]);
  } elseif ($_POST['case'] == 'D2') {
    $q= $db->prepare("SELECT * FROM map WHERE name = :name");
    $q->execute([
      'name' => 'case_D2'
    ]);
    $result=$q->fetch();

    $nb_click = $result['nb_click'] + 1;

    $a = $db->prepare("UPDATE map SET nb_click='".$nb_click."' WHERE name = :name");
    $a->execute([
      'name' => 'case_D2'
    ]);
  } elseif ($_POST['case'] == 'D3') {
    $q= $db->prepare("SELECT * FROM map WHERE name = :name");
    $q->execute([
      'name' => 'case_D3'
    ]);
    $result=$q->fetch();

    $nb_click = $result['nb_click'] + 1;

    $a = $db->prepare("UPDATE map SET nb_click='".$nb_click."' WHERE name = :name");
    $a->execute([
      'name' => 'case_D3'
    ]);
  } elseif ($_POST['case'] == 'D4') {
    $q= $db->prepare("SELECT * FROM map WHERE name = :name");
    $q->execute([
      'name' => 'case_D4'
    ]);
    $result=$q->fetch();

    $nb_click = $result['nb_click'] + 1;

    $a = $db->prepare("UPDATE map SET nb_click='".$nb_click."' WHERE name = :name");
    $a->execute([
      'name' => 'case_D4'
    ]);
  } elseif ($_POST['case'] == 'D5') {
    $q= $db->prepare("SELECT * FROM map WHERE name = :name");
    $q->execute([
      'name' => 'case_D5'
    ]);
    $result=$q->fetch();

    $nb_click = $result['nb_click'] + 1;

    $a = $db->prepare("UPDATE map SET nb_click='".$nb_click."' WHERE name = :name");
    $a->execute([
      'name' => 'case_D5'
    ]);
  }
?>

<meta http-equiv="refresh" content="0.0001;URL=/CoronaTracks/map.php">
