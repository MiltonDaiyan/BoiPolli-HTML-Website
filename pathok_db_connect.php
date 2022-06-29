<style>

body{
    background-color:#f3f7f6;
}
</style>

<?php
$con=mysqli_connect('localhost','root','');

if(!$con)
    die("connection failed".mysqli_connect_error($con));

$db=mysqli_select_db($con,'boipolli');

if(!$db)
    die("Database connection failed".mysqli_connect_error($con));

?>
