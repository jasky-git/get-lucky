<?php
    require_once 'UserDAO.php';
    session_start();
?>
<html>
    <head>
    </head>

    <body>
        <h1>Authenticate</h1>
        <?php

            $name = $_POST['name'];
            $password = $_POST['password'];

            $userdao = new UserDAO();
            $user = $userdao -> getUser($name);

            if (!empty($user)) {
                if (strlen($name) == strlen($user->name) && $name === $user->name && $user->authenticate($password)) {
                    
                    $_SESSION['userid'] = $user->userid;
                    $_SESSION['name'] = $name;
                    header("Location: home.html");
                    exit();
                }
            }

            
            $_SESSION["error"] = "Invalid username or password!";
            header("Location: login.php");

        ?>
    </body>
</html>
