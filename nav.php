
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
</style>

<script>
 
 function mouseOver() {
   document.getElementById("login-form").style.visibility = "visible";
 }

 function mouseOut() {
   document.getElementById("login-form").style.visibility = "hidden";
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
            <li class="active">
              <a href="home.htm">Home</a>
            </li>

            <li><a href="about.html">About</a></li>

            <li class="has-children">
              <a href="destination.html">Things To Do</a>
              <ul class="dropdown">
                <li><a href="#">Food</a></li>
                <li><a href="#">Outdoors & Recreation</a></li>
                <li><a href="#">Arts & Culture</a></li>
                <li><a href="#">Indoor Entertainment</a></li>
                <li><a href="#">Events</a></li>
              </ul>
            </li>
            <li><a href="about.html">Blogs</a></li>
            <li><a href="contact.html">Contact</a></li>
            <!-- <li><a href="booking.html">Book Online</a></li> -->
          </ul>
        </nav>
      </div>

      <div class="col-6 col-xl-2 text-center">
        <div class="d-none d-xl-inline-block">
          <!-- <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">
            <li>
              <a href="#" class="pl-0 pr-3 text-black"><span class="icon-tripadvisor"></span></a>
            </li>
            <li>
              <a href="#" class="pl-3 pr-3 text-black"><span class="icon-twitter"></span></a>
            </li>
            <li>
              <a href="#" class="pl-3 pr-3 text-black"><span class="icon-facebook"></span></a>
            </li>
            <li>
              <a href="#" class="pl-3 pr-3 text-black"><span class="icon-instagram"></span></a>
            </li>
            
          </ul> -->

          <?php
          if (isset($_SESSION['userid'])){?>
            <label id="loginorSignup" class="loginSignup" onmouseover="mouseOver()" onmouseout="mouseOut()" class="site-menu js-clone-nav mx-auto d-none d-lg-block">Hello</label>
          <?php }

          if (!isset($_SESSION['userid'])){?>
            <label id="loginorSignup" class="loginSignup" onmouseover="mouseOver()" onmouseout="mouseOut()" class="site-menu js-clone-nav mx-auto d-none d-lg-block">Login / Sign Up</label>
          <?php }
        ?>

        <div id="login-form" onmouseover="mouseOver()" onmouseout="mouseOut()">
              <h6 style="text-align:left; margin-left:10px; margin-top:30px; margin-bottom:20px;">Sign In with Email Address</h6>
              <form id="loginform" method="post" action="login_process.php" >
                <input type="text" name="userid" placeholder= "User ID" size="35" required />
                <input type="password" name="password" placeholder= "Password" size="35" required /><br>
                <span style="margin:10px; color: blue; font-size:12px;"><a href="forgotpassword.php">Forgot password?</a></span>
                <button type="submit" class="button">Submit</button>        
              </form> 
              <input type="button" class="NewAccountButton" value="Create Account" onclick="window.location.href='createaccount.php'" />
              <hr/>
              
              <h6 style="color:grey;text-align:center;">Or Sign In Using</h6>
              <span style="margin-left:95px;"><img src="image/social.png" height="40px"></span>
          </div>
        </div>

        <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

      </div>

    </div>
  </div>
  <hr/>
  
</header>