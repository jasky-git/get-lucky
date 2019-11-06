<?php
  if(!isset($_SESSION['user']){
    header("Location: home.php");
  } else {
    $user = $_SESSION['user'];
  }
?>