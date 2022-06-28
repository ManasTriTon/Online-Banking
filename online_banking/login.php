<?php
include "./functions.php";
?>
<html>

<head>
    <title>Kaye bank</title>
    <style>
        body {
            background: url("https://c4.wallpaperflare.com/wallpaper/328/159/799/landscapes-cityscapes-fog-mist-new-york-city-statue-of-liberty-manhattan-statues-monumental-twin-tow-architecture-monuments-hd-art-wallpaper-preview.jpg");
            background-size: 100%;
        }
    </style>

<body>
    <div class="loginbox">
        <style>
            .loginbox {
                width: 320px;
                height: 460px;
                background: #000000;
                color: #ffffff;
                top: 50%;
                left: 50%;
                position: absolute;
                transform: translate(-50%, -50%);
                box-sizing: border-box;
                padding: 70px 30px;
            }
        </style>
        <a href="https://yourimageshare.com/ib/id86vtnlrk"><img src="https://yourimageshare.com/ib/id86vtnlrk.jpg" alt="youtimageshare.com - id86vtnlrk" class="user" /></a>
        <style>
            .user {
                width: 80px;
                height: 80px;
                border-radius: 20%;
                position: absolute;
                top: -40px;
                left: calc(50% - 50px);
            }
        </style>
        <h1>Login here</h1>
        <form method="POST">
            <p>Username:</p>
            <input type="text" name="uname" placeholder="Enter Username">
            <p>Password:</p>
            <input type="password" name="pass" placeholder="Enter Password">
            <input type="Submit" name="login2b" value="Login"><br><br>
            <!-- <a href="">Forgot your password?</a><br>
            <a href="./signup.php">Create an account</a> -->
        </form>
        <style>
            h1 {
                margin: 0;
                padding: 0 0 5px;
                text-align: center;
                font-size: 22px;
                font-family: serif;
                border-bottom: 1px solid white;
            }

            .loginbox p {
                margin: 0;
                padding: 0;
                font-weight: bold;
            }

            .loginbox input {
                width: 100%;
                margin-bottom: 10px;
            }

            .loginbox input[type="text"],
            input[type="password"] {
                border: solid;
                border-bottom: 1px solid #fff;
                background: transparent;
                height: 30px;
                color: #fff;
                font-size: 16px;
            }

            .loginbox input[type="submit"] {
                padding: 0;
                height: 30px;
                background: #ffffff;
                color: #000;
                font-size: 18px;
                border-radius: 80px;
                font-weight: bold;
                transform: translate(0%, 40%);
            }

            .loginbox a {
                font-size: 16px;
            }
        </style>
    </div>

</body>
</head>

</html>