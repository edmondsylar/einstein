<?php

  include_once 'config.php';
  $cur = new Config();

  if($_SERVER['REQUEST_METHOD'] == "POST"){
    $imagename = addslashes(file_get_contents($_FILES['image']['tmp_name']));

    $userid = $_POST['userid'];
    $description = $_POST['description'];

    $cur->add_G($userid, $description, $imagename);
  }
 ?>
