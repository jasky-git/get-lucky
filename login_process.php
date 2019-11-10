<?php
  session_start();
  unset($_SESSION['error']);
  require_once 'UserDAO.php';

  $name = $_POST['name'];
  $password = $_POST['password'];

  $userdao = new UserDAO();
  $user = $userdao -> getUser($name, $password);

  if(empty($user) && $user == null) {
    header("Location: home.html");
    $_SESSION['error'] = 'Invalid username or password!';
  }

  $_SESSION['userid'] = $user->userid;
  $_SESSION['name'] = $user->name;
  $_SESSION['email'] = $user->email;

  header('Location: home.html');

?>