<style>

body{
    background-color:#f3f7f6;
}
p{
    margin-top:20%;
    margin-left:20%;
    padding-top:30px;
    text-align:center;
    color: black;
    height: 60px;
    width:60%;
    font-size:20px;
    font-family:'Times New Roman';
    border:1px solid white;
    background-color: beige;

    
}

</style>


<?php
require('pathok_db_connect.php');

if(isset($_POST['username']) and isset($_POST['password']))
{
    $username=$_POST['username'];
    $password_1=$_POST['password'];

  
$query="select * from pathok_registration where username='$username' and password='$password_1'";


$result=mysqli_query($con,$query);

$count=mysqli_num_rows($result);



if($count==1)
  
{
    $extra="home_page.php";
    echo "<script>window.location.href='".$extra."'</script>";
}

else
    echo "<p>INVALID Username OR Password</p>";

}

?>
