<?php //header("Location: home.php");
?>
<html>
  <head>

    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.js">

    <style>
      .navbar{
        height:50px;
        background-color:black;
        
      }
      .loginSignup:hover{
        background-color: grey;
      }

      #login-form{
        position:fixed;
        right:10px;
        top:50px;
        border-bottom:2px solid black;
        border-left:2px solid black;
        border-right:2px solid black;
        height:420px;
        width:350px; 
      }
      input {
        margin-left:10px;
        margin-top:10px;
      }

      .button {
        background-color: black;
        border: none;
        color: white;
        padding: 7px;
        width:325px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-top:20px;
        margin-left:10px;
      }

      .NewAccountButton {
        background-color: orange;
        border: none;
        color: black;
        padding: 7px;
        width:325px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-top:-7px;
        margin-bottom:20px;
      }
    </style>

    <script>
     
      function mouseOver() {
        document.getElementById("login-form").style.visibility = "visible";
      }

      function mouseOut() {
        document.getElementById("login-form").style.visibility = "hidden";
      }
    </script>
    <title>Get Lucky</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-sm bg-dark" style="background-color: black;">
    <label id="loginorSignup" class="loginSignup" onmouseover="mouseOver()" onmouseout="mouseOut()" style="display:inline-block; padding:10px;color:white; margin-right:20px;position: absolute; right:0; margin-top:auto; margin-bottom:auto;">Login / Sign Up</label>
  </nav>
  <div id="login-form" onmouseover="mouseOver()" onmouseout="mouseOut()" >
      <h5 style="text-align:left; margin-left:10px; margin-top:30px; margin-bottom:20px;">Sign In with Email Address</h5>
      <form id="loginform" method="post" action="authentication.php" >
        <input type="text" id="email" placeholder= "Email Address" size="40"/>
        <input type="password" id="password" placeholder= "Password" size="40"/>
        <span style="margin:10px; color: blue;"><a href="forgotpassword.php">Forgot password?</a></span>
        <button type="submit" class="button">Submit</button>        
      </form> 
      <input type="button" class="NewAccountButton" value="Create Account" onclick="window.location.href='createaccount.php'" />
      <hr/>
      
      <h6 style="color:grey;text-align:center;">Or Sign In Using</h6>
      <span style="margin-left:95px;"><img src="image/social.png" height="40px"></span>

     

  </div>
    
    <a href="listview.html">List-view Page</a>
  </body>
</html>