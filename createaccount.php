<?php
  include "UserDAO.php";
  session_start();
  // session_destroy();
  // if($_POST['name'] && $_POST['email'] && $_POST['tele_username'] && $_POST['password'] && $_POST['re_password']) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $tele_username = $_POST['tele_username'];
      $password = $_POST['password'];
      $re_password = $_POST['re_password'];
      
      $dao = new UserDAO();
      $result = $dao->addUser($name, $email, $tele_username, $password);
      
      var_dump($result);
      
      if($result) {
        $result = "<script type='text/javascript'>alert('Account Creation Successful');</script>";
        
        $_SESSION['result'] = $result;
      } else {
        $result = "<script type='text/javascript'>alert('Account Creation Unsuccessful');</script>";
        $_SESSION['result'] = $result;
      }
      header("Location: home.html");
  // } else {
    
    // $result = "<script type='text/javascript'>alert('Account Creation Unsuccessful');</script>";
    // $_SESSION['result'] = $result;
    
    // // header("Location: home.html");
  // }


?>

<!--
<html>
    <head>
    
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/bootstrap.min.js">

        <style>
            body{
                background-color:#007FA6;
            }

            #signup-block{
                width:700px;
                height:900px;
                margin-top:50px;
                margin-left:auto;
                margin-right:auto;
                text-align:center;
                color:white;
                font-family: sans-serif;
                
            }

            #signup-form{
                margin-top:30px;
                width:450px;
                height:800px;
                margin-left:auto;
                margin-right:auto;
                background-color:#F2ECEE;
                color:black;
                text-align:left;
                padding: 20px 50px 0px 50px;
            }

            .button {
                background-color: orange;
                border: none;
                color: white;
                padding: 7px;
                width:360px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin-top:10px;
            }

            .LoginButton {
                background-color: blue;
                border: none;
                color: white;
                padding: 7px;
                width:360px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
            }

        </style>
    </head>

    <body>
        <div id="signup-block">
            <h1>Your last-minute trip planner starts here</h1>
            <div id="signup-form">
                    <h2 style="text-align:center">Create New Account</h2>
                <form method="post" action="create_account_process.php">
                    <br>
                    <label>Name</label><br>
                    <input type="text" id="name" name="name" size="40" style="height:35px;" required />
                    <br>
                    <label>Email</label><br>
                    <input type="email" id="email" name="email" size="40" style="height:35px;" required />
                    <br>
                    <label>Telegram Username</label><br>
                    <input type="text" id="tele" name="tele"  size="40" style="height:35px;" required />
                    <br>
                    <label>Password</label><br>
                    <input type="password" name="password" size="40" style="height:35px;" required />
                    <br>
                    <label id="pwderror" style="color:red;visibility:hidden;">Password doesn't match </label>
                    <br>
                    <label>Re-enter Password</label><br>
                    <input type="password" name="re-password" size="40" style="height:35px;" required />
                    <br>
                    <label id="pwderror2" style="color:red;visibility:hidden;">Password doesn't match </label>
                    <br>
                    <button type="submit" class="button">Create Account</button> 
                </form>
                <input type="button" class="LoginButton" value="Already owned an account? Login here" onclick="window.location.href='login.php'" />
            </div>
        </div>
        <?php
            // if (isset($_GET['error'])){
                // if ($_GET['error'] == "pwdnm")
                {?>
                    <script>
                        document.getElementById("pwderror").style.visibility = "visible";
                        document.getElementById("pwderror2").style.visibility = "visible";
                    </script>
                // <?php }
            // }
        // ?>
    </body>
</html>
-->