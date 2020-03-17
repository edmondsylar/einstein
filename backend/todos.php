<?php

  include_once 'config.php';
  $cur = new Config();

  if (isset($_GET['update_data'])){
    if($_SERVER['REQUEST_METHOD'] == "POST"){

      $cur->update_user_info($_GET['update_data'], $_POST['email'], $_POST['c_names'], $_POST['phone']);

    }
  }elseif(isset($_GET['password_reset'])){
    if($_SERVER['REQUEST_METHOD'] == "POST"){

      $id = $_GET['password_reset'];

      $old = $_POST['password_old'];
      $new = $_POST['new_password'];
      $rep = $_POST['repeat_password'];

      if($new == $rep){
        // echo "passwords match you can make the change! ".$old.' '.$new.' '.$rep.' '.$id;
        $cur->change_password($id, $old, $new);
      }else{
        echo "The passwords do not match!";
      }

    }
  }elseif (isset($_GET['send-message'])) {
    $msg = $_POST['message'];
    $receiver = $_POST['receiver'];

    $cur->send_message($receiver, $msg);

  }elseif (isset($_GET['clear-not'])) {
    $id = $_GET['clear-not'];

    $cur->clear_notifications($id);
    // echo "receiver :".$id;
  }

 ?>
