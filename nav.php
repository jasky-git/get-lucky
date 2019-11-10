<?php
  session_start();
?>

<link rel="stylesheet" href="bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/bootstrap.min.js">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
<link rel="stylesheet" href="Travellers/travelers/fonts/icomoon/style.css">

<link rel="stylesheet" href="Travellers/travelers/css/bootstrap.min.css">
<link rel="stylesheet" href="Travellers/travelers/css/magnific-popup.css">
<link rel="stylesheet" href="Travellers/travelers/css/jquery-ui.css">
<link rel="stylesheet" href="Travellers/travelers/css/owl.carousel.min.css">
<link rel="stylesheet" href="Travellers/travelers/css/owl.theme.default.min.css">

<link rel="stylesheet" href="Travellers/travelers/css/bootstrap-datepicker.css">

<link rel="stylesheet" href="Travellers/travelers/fonts/flaticon/font/flaticon.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


<link rel="stylesheet" href="Travellers/travelers/css/aos.css">

<link rel="stylesheet" href="Travellers/travelers/css/style.css">

<style>
  .navbar{
    height:50px;
    background-color:black;

  }
  .loginSignup:hover{
    background-color: grey;
  }

  #login-form{
    background-color: white;
    position:fixed;
    right:10px;
    top:48px;
    /* border-top :1px solid black; */
    border-bottom:1px solid black;
    border-left:1px solid black;
    border-right:1px solid black;
    height:420px;
    width:320px;
    visibility:hidden;
  }

  #create-account-block{
      background-color: white;
      width:600px;
      height:600px;
      margin-top:50px;
      margin-left:auto;
      margin-right:auto;
      text-align:center;
      color:white;
      position:fixed;
      left:50%;
      top:50%;
      transform: translate(-50%,-50%);
      -ms-transform: translate(-50%,-50%);
  }

  #create-account-form{
      margin-top:30px;
      margin-left:auto;
      margin-right:auto;
      color:black;
      text-align:left;
      padding: 20px 50px 0px 50px;
  }

  #create-account-form input{
    border-radius: 3px;
    border-width: thin;
    box-sizing: border-box;
    width: 100%;
    padding: 15px 12px;
    margin: 6px 0;
  }

  #create-account-form button{
    border-radius: 3px;
    border-width: thin;
    box-sizing: border-box;
    width: 100%;
    padding: 15px 12px;
    margin: 6px 0;
  }

  input {
    margin-left:10px;
    margin-top:10px;
    font-size: 14px;
  }

  .button {
    background-color: black;
    border: none;
    color: white;
    padding: 7px;
    width:290px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin-top:20px;
    margin-left:0px;
  }

  .NewAccountButton {
    background-color: orange;
    border: none;
    color: black;
    padding: 7px;
    width:290px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin-top:-7px;
    margin-bottom:15px;
    margin-left:0px;
  }

  #overlay {
  position: fixed;
  display: none;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.5);
  z-index: 2;
  cursor: pointer;
  }

</style>

<script>

 function mouseOver() {
   document.getElementById("login-form").style.visibility = "visible";
 }

 function mouseOut() {
   document.getElementById("login-form").style.visibility = "hidden";
 }

 function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  document.getElementById("overlay").style.display = "none";
}
</script>


<body>
<div class="site-wrap">

<div class="site-mobile-menu">
  <div class="site-mobile-menu-header">
    <div class="site-mobile-menu-close mt-3">
      <span class="icon-close2 js-menu-toggle"></span>
    </div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div>

<header class="site-navbar py-1" role="banner">

  <div class="container">
    <div class="row align-items-center">

      <div class="col-6 col-xl-2">
        <h1 class="mb-0"><a href="home.html" class="text-black h2 mb-0">Get Lucky</a></h1>
      </div>
      <div class="col-10 col-md-8 d-none d-xl-block">
        <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

          <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
            <!-- class="active" -->
            <li>
              <a href="home.html">Home</a>
            </li>

            <li><a disabled>About</a></li>

            <li class="has-children">
              <a>Things To Do</a>
              <ul class="dropdown">
                <li><a disabled>Food</a></li>
                <li><a disabled>Outdoors & Recreation</a></li>
                <li><a disabled>Arts & Culture</a></li>
                <li><a disabled>Indoor Entertainment</a></li>
                <li><a disabled>Events</a></li>
              </ul>
            </li>
            <li><a disabled>Blogs</a></li>
            <li><a href="listview.html">Create a Plan</a></li>
            <!-- <li><a href="booking.html">Book Online</a></li> -->
          </ul>
        </nav>
      </div>

      <div class="col-6 col-xl-2 text-center">
        <div class="d-none d-xl-inline-block">

          <?php
          if(isset($_SESSION['error'])){
            echo "<script type='text/javascript'>alert('invalid username or password!');</script>";
          }

          if(isset($_SESSION['result'])){
            echo $_SESSION['result'];
            unset($_SESSION['result']);
          }

          if (isset($_SESSION['name'])){
            unset($_SESSION['error']);
            echo "Hello, ".$_SESSION['name']." ";
            ?>

            <a href="logout.php"> Logout </a>

          <?php } else { ?>
            <label id="loginorSignup" class="loginSignup" onmouseover="mouseOver()" onmouseout="mouseOut()" class="site-menu js-clone-nav mx-auto d-none d-lg-block">Login / Sign Up</label>
        <?php } ?>

        <div id="login-form" onmouseover="mouseOver()" onmouseout="mouseOut()">
              <h6 style="text-align:left; margin-left:10px; margin-top:30px; margin-bottom:20px;">Sign In with Email Address</h6>
              <form id="loginform" method="post" action="login_process.php" >
                <input type="text" name="name" placeholder= "Username" size="35" required />
                <input type="password" name="password" placeholder= "Password" size="35" required /><br>
                <span style="margin:10px; color: blue; font-size:12px;"><a href="">Forgot password?</a></span>
                <button type="submit" class="button">Submit</button>
              </form>
              <input type="button" class="NewAccountButton" value="Create Account" onclick="on()" />
              <hr/>

              <h6 style="color:grey;text-align:center;">Or Sign In Using</h6>
              <span style="margin-left:95px;"><img src="image/social.png" height="40px"></span>
        </div>

        <div id="overlay">
            <div id="create-account-block">
              <div id="create-account-form">
              <img src="image/round-delete-button.png" onclick="off()" style="height:30px; width: 30px;">
              <br><br>
              <h1 style="text-align:center; color: black;"><strong>Create Your Account</strong></h1>
                <!-- <form id="createaccount" method="post" action="<?php //$_SERVER['PHP_SELF']; ?>"> -->
                <form id="createaccount" method="post" action="createaccount.php">
                  <input type="text" id="name" name="name" size="40" style="height:35px;" required placeholder="Name" required/>
                  <input type="email" id="email" name="email" size="40" style="height:35px;" required placeholder="Email" required/>
                  <input type="text" id="tele" name="tele_username"  size="40" style="height:35px;" required placeholder="Telegram Username" required/>
                  <input type="password" id="password" name="password" size="40" style="height:35px;" required placeholder="Password" required/>
                  <input type="password" id="re_password" name="re_password" size="40" style="height:35px;" required placeholder="Confirm Password" required/>
                  <label style="color: red;" id="match_password"></label>

                  <!-- <label id="pwderror2" style="color:red;visibility:hidden;">Password doesn't match </label> -->
                  <button type="submit" name="create_submit" onclick="off()" class="button">Create</button>

                  <script>
                    var password = document.getElementById("password")
                      , confirm_password = document.getElementById("re_password");

                    function validatePassword(){
                      if(password.value != confirm_password.value) {
                        confirm_password.setCustomValidity("Passwords Don't Match");
                        document.getElementById('match_password').innerHTML = "Passwords Don't Match!";
                      } 
                      
                      else {
                        confirm_password.setCustomValidity('');
                        // window.location.replace("createaccount.php");
                      }
                    }

                    // password.onchange = validatePassword;
                    confirm_password.onkeyup = validatePassword;
                  </script>
                </form>
            </div>
          </div>
        </div>

        <?php
          if(isset($_POST['create_submit'])){
            $password = $_POST['password'];
            $repassword = $_POST['re-password'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $tele_username = $_POST['tele'];

            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;

            // if ($password != $repassword){
            //     $error = "Password doesn't match";
            // }

            // else {
              $user = (object) array('name' => $name ,'email' => $email,'tele_username' => $tele_username, 'password' => $password);

              $userdao = new UserDAO();
              $user = $userdao -> addUser($user);
            // }
          }

          // if (isset($error)){
          //     {?>
                   <script>
          //             document.getElementById("pwderror2").style.visibility = "visible";
          //         </script>
               <?php
          // }
        // ?>
        </div>


        </div>

        <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

      </div>

    </div>
  </div>
  <hr/>

</header>