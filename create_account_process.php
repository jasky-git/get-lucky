<?php
    require_once 'UserDAO.php';
?>
<html>
    <head>
    </head>

    <body>
        <h1>Create New Account</h1>
        <?php

            $userid = $_POST['userid'];
            $password = $_POST['password'];
            $repassword = $_POST['re-password'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $telegram_username = $_POST['tele'];

            if ($password != $repassword){
                $error = "Password doesn't match";
                print_r ($error);
                header('Location:createaccount.php?error=pwdnm&userid='. $userid .'&name='.$name.'&email='.$email.'&tele='.$telegram_username);
            }

            else{

                $user = (object) array('userid' => $userid ,'password' => $password,'name' => $name, 'email' => $email, 'telegram_username' => $telegram_username);

                $userdao = new UserDAO();
                $user = $userdao -> addUser($user);


                header('Location:home.php');
            }

        ?>
    </body>
</html>
