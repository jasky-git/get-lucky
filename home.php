<?php 
if(isset($_SESSION['user'])){
  $user = $_SESSION['user'];
}
?>
<html>
  <head>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="style/style.css"/>
    
    <script>
     
      function mouseOver() {
        document.getElementById("login-form").style.visibility = "visible";
      }

      function mouseOut() {
        document.getElementById("login-form").style.visibility = "hidden";
      }
    </script>
    <?php include "nav.php"; ?>
    <title>Get Lucky</title>
  </head>
  
  <body>
  <!-- <nav class="navbar navbar-expand-sm bg-dark" style="background-color: black;">
    <?php
      //if (isset($_SESSION['userid'])){?>
        <label id="loginorSignup" class="loginSignup" onmouseover="mouseOver()" onmouseout="mouseOut()" style="display:inline-block; padding:10px;color:white; margin-right:20px;position: absolute; right:0; margin-top:auto; margin-bottom:auto;">Hello</label>
     <?php //}

      //if (!isset($_SESSION['userid'])){?>
        <label id="loginorSignup" class="loginSignup" onmouseover="mouseOver()" onmouseout="mouseOut()" style="display:inline-block; padding:10px;color:white; margin-right:20px;position: absolute; right:0; margin-top:auto; margin-bottom:auto;">Login / Sign Up</label>
     <?php //}
    ?>
    
  </nav>
  <div id="login-form" onmouseover="mouseOver()" onmouseout="mouseOut()" >
      <h5 style="text-align:left; margin-left:10px; margin-top:30px; margin-bottom:20px;">Sign In with Email Address</h5>
      <form id="loginform" method="post" action="login_process.php" >
        <input type="text" name="userid" placeholder= "User ID" size="40" required />
        <input type="password" name="password" placeholder= "Password" size="40" required />
        <span style="margin:10px; color: blue;"><a href="forgotpassword.php">Forgot password?</a></span>
        <button type="submit" class="button">Submit</button>        
      </form> 
      <input type="button" class="NewAccountButton" value="Create Account" onclick="window.location.href='createaccount.php'" />
      <hr/>
      
      <h6 style="color:grey;text-align:center;">Or Sign In Using</h6>
      <span style="margin-left:95px;"><img src="image/social.png" height="40px"></span>

   

  </div>
    
    <a href="listview.html">List-view Page</a> -->
  </body>
</html>