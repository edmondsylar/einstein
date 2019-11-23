<?php
  session_start();

  $_SESSION = array();
  session_destroy();
  session_abort();
  return header("location: ../index.php");
  exit();
?>
