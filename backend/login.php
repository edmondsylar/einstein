<?php
  include_once 'config.php';
  $cur = new Config();

  if($_SERVER['REQUEST_METHOD'] == "POST"){

    // get the post variables
    $email = $_POST['email'];
    $password = $_POST['password'];

    $cur->login($email, $password);

  }
 ?>
