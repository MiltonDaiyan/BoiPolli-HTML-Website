<!DOCTYPE html>
<html>

<head>
    <title>BoiPolli Home Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            height: 760px;
            width: 1348px;
            padding-top: 1px;
        }

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

        .center_container {
            height: 60%;
            width: 60%;
        }

        /** Card Design **/

        .literature {
            margin-top: 20px;
            margin-left: 350px;
            margin-bottom: 20px;
        }

        .b_literarure {
            height: 50px;
            width: 150px;
            border: 1px solid lightblue;
            border-radius: 50px;
            margin-left: 50px;
        }

        .w_literature {
            height: 50px;
            width: 150px;
            border: 1px solid lightblue;
            border-radius: 50px;
            margin-left: 50px;
        }

        .c_writings {
            height: 50px;
            width: 150px;
            border: 1px solid lightblue;
            border-radius: 50px;
            margin-left: 50px;
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
        .banner-pic img {
            width: 100%;
            height: 100%;
        }
         footer.p-3.bg-dark.text-white {
            background: #222;
            color: #fff;
            padding: 10px 0;
        }
        

    </style>
   
</head>

<body>

    <nav class="navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <img src="logo.png" alt="logo" id="boipolli_logo">
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="home_page.php">Home</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        E-Library
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="http://localhost/my%20php%20program/Boipolli/Bangla%20Literature/bangla_literature.php">Bengali Literature</a><br>
                        <a class="dropdown-item" href="http://localhost/my%20php%20program/Boipolli/World%20Literature/world_literature.php">World Literature</a>
                    </div>
                </li>
                <li><a href="creative_writings.php">Creative Writings</a></li>
                <li><a href="upload.php">Send Writings</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="banner-pic">
        <img src="banner11.jpg" alt="">
        <div class="login-btn">
            <div class="sign">
                <a class="btn btn-primary custom-btn" href="http://localhost/my%20php%20program/Boipolli/Bangla%20Literature/bangla_literature.php" role="button">Bengali Literarure</a>
            </div>
            <div class="sign">
                <a class="btn btn-primary custom-btn" href="http://localhost/my%20php%20program/Boipolli/World%20Literature/world_literature.php" role="button">World Literarure</a>
            </div>
            <div class="sign">
                <a class="btn btn-primary custom-btn" href="creative_writings.php" role="button">Creative Writings</a>
            </div>
        </div>
    </div>
    
    

<footer class="p-3 bg-dark text-white">
        <p class="text-center">BoiPolli @ Copyright 2021 | Design By Friends & Co.</p>
    </footer>
</body>

</html>
