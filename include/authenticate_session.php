<?php
  if(!isset($_SESSION['name'])){
    header("Location: home.html");
  } else {
    $user = $_SESSION['name'];
  }
?>