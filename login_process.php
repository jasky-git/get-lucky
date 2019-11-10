<?php
    require_once 'UserDAO.php';
    session_start();


  $name = $_POST['name'];
  $password = $_POST['password'];

            $name = $_POST['name'];
            $password = $_POST['password'];

            $userdao = new UserDAO();
            $user = $userdao -> getUser($name,$password);

            if (!empty($user)) {
              $_SESSION['userid'] = $user->userid;
              $_SESSION['name'] = $name;
              unset($_SESSION['error']);
              header("Location: home.html");
              exit();
            }


            $_SESSION["error"] = "Invalid username or password!";
            header("Location: home.html");

        ?>
