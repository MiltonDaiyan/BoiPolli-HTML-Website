<style>

body{
    background-color:#f3f7f6;
}
p{
    text-align:center;
    color: white;
    font-size:20px;
    margin-top:20px;
    padding-top:30px;
    font-family:'Times New Roman';
    color: black;
    height: 60px;
    width:80%;
    margin-left:100px;
    border:1px solid white;
    background-color: beige;

    
}
h2{
    text-align: center;
    margin-top:200px;
    margin-left:100px;
    padding-top:30px;
    color: black;
    height: 60px;
    width:80%;
    border:1px solid white;
    background-color: beige;
}
a{
    text-decoration: none;
    color: black;
}


a:hover {
    color: crimson;
    font-weight:bold;
}
</style>

<?php

if(isset($_POST['register']))
{ 
    $username=$_POST['username'];
    $name=$_POST['name'];  
    $gender=$_POST['gender'];
    $city=$_POST['city'];
    $fg=$_POST['favourite_genre'];
    $fw=$_POST['favourite_writer'];
    $email=$_POST['email'];


    $password_1=$_POST['password_1'];
    $password_2=$_POST['password_2'];
   
    
    if(!empty($username) || !empty($name) || !empty ($gender) || !empty($city) || !empty($fg) || !empty($fw) || !empty($email) || !empty($password_1))
    {
        if($password_1==$password_2)
        {
            $con=mysqli_connect('localhost','root','','boipolli');
            
            if(mysqli_connect_error())
            {
                die("<p>Connection failed</p>".mysqli_connect_error());
            }
            else
            {
                $sql = "insert into pathok_registration(username,name,gender,city,favourite_genre,favourite_writer,email,password) values('$username','$name','$gender','$city','$fg','$fw','$email','$password_1')";
                
                if($con-> query($sql))
                {
                    $link="sign_in.php";
                   echo "<h2>Registration Successfull!! Now Lets Sign In and collect your desired books. </h2> ";  
                        echo "<p><a href='".$link."'> Click here To Sign In </a></p>"; 
                }
                else
                {
                    echo "<p>Error</p>".$sql."<br>".$con->error;
                }
                $con->close();
            }
                        
        }
        else{
                echo "<p>Password not matched!!</p>";
            }
    }
    
}

?>