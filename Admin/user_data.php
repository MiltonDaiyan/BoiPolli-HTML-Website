<?php
session_start();
include'../pathok_db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      body{
        background-color:#f3f7f6;
      }

  .row{
    height: 70%;
    width: 100%;
    margin-top: 80px;
    padding-top:80px;
  }
  caption{
        padding-top:20px;
        padding-bottom:20px;
        background-color:beige;
        color: crimson;
        text-align: center;
        font-family:'Times New Roman';
        Font-weight:bold;
        font-size: 30px;
  }
  table, th, td {
 
  margin:auto;
  border: 2px solid white;
  border-collapse: collapse;
  color:black;
  background-color:beige;
  }
th, td {
        padding: 10px;
        text-align: center;
        font-family:'Times New Roman';
        font-size: 17px;
}

td:hover{
 background-color:crimson;
}
  </style>


    <title>Admin | Manage Users</title>

  </head>

  <body>

				<div class="row">
                          <table>
                         <caption> Readers Data</caption>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                 
                              <th>Sno.</th>
                                  <th>Username</th>
                                  <th>Name</th>
                                  <th>Gender</th>
                                  <th>City</th>
                                  <th>Favourite Genre</th>
                                  <th>Favourite Writer</th>
                                  <th>Email</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php $ret=mysqli_query($con,"select * from pathok_registration");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                              <td><?php echo $row['username'];?></td>
                                  <td><?php echo $row['name'];?></td>
                                  <td><?php echo $row['gender'];?></td>
                                  <td><?php echo $row['city'];?></td>
                                  <td><?php echo $row['favourite_genre'];?></td>
                                  <td><?php echo $row['favourite_writer'];?></td>
                                  <td><?php echo $row['email'];?></td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                             
                              </tbody>
                          </table>
              </div>

  </body>
</html>



                                


