<?php

  include_once 'config.php';
  $cur = new Config();

  if($_SERVER['REQUEST_METHOD'] == "POST"){

    $imagename = addslashes(file_get_contents($_FILES['image']['tmp_name']));

    $name = $_POST['name'];
    $desc = $_POST['description'];

    $pitch = $_POST['pitch'];
    $buss = $_POST['bssdev'];
    $market = $_POST['market'];
    // $name = $_POST['']

    $id = $cur->register_ent($name, $desc, $imagename);
    $cur->details($id, $pitch, $buss, $market);


  }

 ?>
