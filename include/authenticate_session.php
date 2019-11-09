<?php
  if(!isset($_SESSION['user'])){
    header("Location: home.html");
  } else {
    $user = $_SESSION['user'];
  }
?>