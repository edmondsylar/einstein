<?php
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_NAME', 'raising');

  $conector = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

  if($conector === false){
    // die("ERROR: Could not connect. " . mysqli_connect_error());
    header("Location:./error.php");
  } else{
    // header("Location:");
    // echo "Connection established!";
  }
 ?>
