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
                height:600px;
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
                height:500px;
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
                margin-bottom:10px;
            }

            .LoginButton {
                background-color: black;
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
            <h1>Welcome back to Get-Lucky</h1>
            <div id="signup-form">
                    <h2 style="text-align:center">Log In Now</h2>
                <form method="post" action="login_process.php">
                    <br>
                    <label>User ID</label><br>
                    <input type="text" name="userid" size="40" style="height:35px;" required />
                    <br><br>
                    <label>Password</label><br>
                    <input type="password" name="password" size="40" style="height:35px;" required />
                    <br><br>
                    <button type="submit" class="LoginButton">Log In</button> 
                </form>
                <input type="button" class="button" value="Create Account" onclick="window.location.href='createaccount.php'" />
                <hr/>
                <h6 style="color:grey;text-align:center;">Or Sign In Using</h6>
                <span style="margin-left:95px;"><img src="image/social.png" height="40px"></span>
            </div>
        </div>
    </body>
</html>
