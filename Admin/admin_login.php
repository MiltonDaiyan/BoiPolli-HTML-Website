<html>

<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="admin_style.css">
</head>

<body>


    <div class="container">
        <div class="a">
            <center>
                <p>Admin Login</p>
            </center>
            <form method="post" action="authentication.php">

                <div><input type="text" name="username" placeholder="Username" required></div>
                <div><input type="password" name="password" placeholder="Password" required></div>
                <button type="submit" name="signin">Sign In</button><br>
            </form>

        </div>

    </div>



</body>

</html>
