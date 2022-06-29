<html>

<head>
    <title>Boipolli</title>
    <link rel="stylesheet" type="text/css" href="sign_in_style.css">
</head>

<body>


    <div class="container">
        <div class="a">
            <center>
                <p>Sign In</p>
            </center>
            <form method="post" action="authentication.php">

                <div><input type="text" name="username" placeholder="Username" required></div>
                <div><input type="password" name="password" placeholder="Password" required></div>
                <button type="submit" name="signin">Sign In</button><br>

                <p class="b">Don't have an account? <a href="registration.php">Sign Up</a></p>
            </form>

        </div>

    </div>



</body>

</html>
