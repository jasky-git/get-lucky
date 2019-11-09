<?php
    require_once 'UserDAO.php';
?>
<html>
    <head>
    </head>

    <body>
        <h1>Authenticate</h1>
        <?php

            $userid = $_POST['userid'];
            $password = $_POST['password'];

            $userdao = new UserDAO();
            $user = $userdao -> getUser($userid);


            if (!empty($user)) {
                if (strlen($userid) == strlen($user->userid) && $userid === $user->userid && $user->authenticate($password)) {
                    $_SESSION['userid'] = $userid;
                    header("Location: home.html");
                    exit();
                }
            }

            $_SESSION['error'] = 'Invalid username or password!';

            header('Location:login.php');

        ?>
    </body>
</html>
