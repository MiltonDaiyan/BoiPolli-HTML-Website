<!DOCTYPE html>
<html lang="en">

<head>
    <title>BoiPolli</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    


        #boipolli_logo {
            width: 70px;
            height: 50px;
        }

        .nav navbar-nav:hover {
            color: crimson;
        }

        .navbar-header {
            padding-left: 30px;
            padding-right: 10px;
        }

        .dropdown-menu {
            text-align: center;
            background: black;
        }

        .dropdown-menu a {
            text-decoration: none;
        }

        .dropdown-item:hover {
            color: crimson;
            background: black;
        }

        .dropdown-item {
            color: white;
        }

        .banner-pic img {
            width: 100%;
            height: 100%;
        }

        .navbar {
            margin-bottom: 0px;
        }

        .banner-pic {
            position: relative;
        }

        .login-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .sign {
            margin-bottom: 10px;
        }

        .custom-btn {
            padding: 10px 40px;
            width: 300px;
        }
        footer.p-3.bg-dark.text-white {
            background: #222;
            color: #fff;
            padding: 10px 0;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <img src="logo.png" alt="logo" id="boipolli_logo">
            </div>
            <ul class="nav navbar-nav">
                <li><a style="color: crimson;font-size: 25px;font-family: monospace;" href="#">BoiPolli</a></li>


            </ul>
        </div>
    </nav>
    <div class="banner-pic">
        <img src="banner11.jpg" alt="">
        <div class="login-btn">
            <div class="sign">
                <a class="btn btn-primary custom-btn" href="registration.php" role="button">Sign Up</a>
            </div>
            <div class="sign">
                <a class="btn btn-primary custom-btn" href="sign_in.php" role="button">Sign In</a>
            </div>
        </div>
    </div>


    <footer class="p-3 bg-dark text-white">
        <p class="text-center">BoiPolli @ Copyright 2021 | Design By Friends & Co.</p>
    </footer>



</body>

</html>