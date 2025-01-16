

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
            @font-face {
                font-family: po;
                src: url(fonts/Poppins-Regular.ttf);
            }
            @font-face {
                font-family: ua;
                src: url(fonts/Montalban.otf);
            }
            @font-face {
                font-family: re;
                src: url(fonts/renegadolaser.ttf);
            }
    </style>
</head>
<body>
        <!--WRAPPER-->
        <div class="wrapper">
            <!--Nav-Bar-->
            <header>
                <!--logo-->
                <div class="logo"></div>
                <!-- Team-name -->
                <a href="#" class="team-name">Atletico de Madrid</a>
                <!--nav-list-->
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Images</a></li>
                        <li><a href="#">History</a></li>
                        <li><a href="#">Players</a></li>
                        <li><a href="#">Championships</a></li>
                    </ul>
                </nav>
            </header>
            <div class="cta">
                <div class="form-container">
                    <form method="post" action="after.php">
                        <label>
                            <h2>Login Section</h2>
                            Username: 
                            <br>
                            <input type="text" name="uname" placeholder="Enter Username" class="bar">
                            <br>
                            Password:
                            <br>
                            <input type="password" name="pwd" placeholder="Enter Password" class="bar">
                            <br>
                            <input type="submit" value="Login" id="login-btn">
                            
                        </label>
                    </form>
                </div>
            </div>
            <p>Username: admin</p>
            <p>Password: admin</p>
            <!-- </div> -->
        </div> <!--eo WRAPPER-->

</body>
</html>