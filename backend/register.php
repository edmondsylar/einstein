<?php
  include_once 'config.php';
  $cur = new Config();

  if($_SERVER['REQUEST_METHOD'] == "POST"){

    $user = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['tel'];
    $password = $_POST['password'];
    $verify = $_POST['repeat-password'];

    if($password == $verify){
      $cur->register($user, $email, $phone, $password);

    }else{

      echo "Passwords dont match";
    }


  }

 ?>
