<?php

$localhost="localhost";
$dbusername="root";
$dbpassword="";
$dbname="boipolli";

$con=mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

if(isset($_POST["submit"]))
{
    $username=$_POST["username"];
    $title=$_POST["title"];

    $pname = rand(1000,1000)."-".$_FILES["writings"] ["name"] ;
    $tname=$_FILES["writings"] ["tmp_name"];  

    $uploads_dir = 'uploaded_writings';
    move_uploaded_file( $tname, $uploads_dir.'/'.$pname);
    
  $sql = "INSERT into upload_files(username,title,writings) values('$username','$title','$pname')";

  if(mysqli_query($con,$sql)){
    $link="home_page.php";
      echo "<p>File Successfully Uploaded</p>";
      echo "<p><a href='".$link."'> Return to Home Page </a></p>"; 
  }
  else{
    echo "<p>Error</p>";
  }
}
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contact</title>
        <link rel="stylesheet" type="text/css" href="contact_style.css">
    </head>
    <body>
        <div class="container"></div>
        <div class="a">
            <center><p>Send Your Writings</p></center>
            <form class="contact-form" method="post" enctype="multipart/form-data" action="<?=$_SERVER['PHP_SELF'];?>" >

                <div><input type="text" name="username" placeholder="Username" required></div>
                <div><input type="text" name="title" placeholder="Title" required></div>
                <div><input type="file" name="writings" class="file"></div>
                <button type="submit" name="submit">Upload</button><br>
                <p> Get Back To <a href="home_page.php">Home Page </p>
            </form>
        </div>
</body>
</html>

