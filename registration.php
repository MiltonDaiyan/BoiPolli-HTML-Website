<html>

<head>
    <title>Boipolli</title>
    <link rel="stylesheet" type="text/css" href="reg_style.css">
</head>

<body>

    <div class="container">
        <div class="a">
            <center>
                <p>Registration</p>
            </center>



            <form method="post" action="db_connect.php">


                <div class="input">

                    <input type="text" name="username" required placeholder="Username">
                </div>
                <div class="input">

                    <input type="text" name="name" required placeholder="Full Name">
                </div>
                <div class="input">
                    <select name="gender">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>
                    </select>
                </div>
                <div class="input">

                    <select name="city">
                        <option value="">Select Location</option>
                        <option value="Bagerhat">Bagerhat</option>
                        <option value="Bandarban">Bandarban</option>
                        <option value="Barguna">Barguna</option>
                        <option value="Barisal">Barisal</option>
                        <option value="Bhola">Bhola</option>
                        <option value="Bogra">Bogra</option>
                        <option value="Brahmanbaria">Brahmanbaria</option>
                        <option value="Chandpur">Chandpur</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Chuadanga">Chuadanga</option>
                        <option value="Comilla">Comilla</option>
                        <option value="Cox'sBazar">Cox'sBazar</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Dinajpur">Dinajpur</option>
                        <option value="Faridpur">Faridpur</option>
                        <option value="Feni">Feni</option>
                        <option value="Gaibandha">Gaibandha</option>
                        <option value="Gazipur">Gazipur</option>
                        <option value="Gopalganj">Gopalganj</option>
                        <option value="Habiganj">Habiganj</option>
                        <option value="Jaipurhat">Jaipurhat</option>
                        <option value="Jamalpur">Jamalpur</option>
                        <option value="Jessore">Jessore</option>
                        <option value="Jhalokati">Jhalokati</option>
                        <option value="Jhenaidah">Jhenaidah</option>
                        <option value="Khagrachari">Khagrachari</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Kishoreganj">Kishoreganj</option>
                        <option value="Kurigram">Kurigram</option>
                        <option value="Kushtia">Kushtia</option>
                        <option value="Lakshmipur">Lakshmipur</option>
                        <option value="Lalmonirhat">Lalmonirhat</option>
                        <option value="Madaripur">Madaripur</option>
                        <option value="Magura">Magura</option>
                        <option value="Manikganj">Manikganj</option>
                        <option value="Maulvibazar">Maulvibazar</option>
                        <option value="Meherpur">Meherpur</option>
                        <option value="Munshiganj">Munshiganj</option>
                        <option value="Mymensingh">Mymensingh</option>
                        <option value="Naogaon">Naogaon</option>
                        <option value="Narail">Narail</option>
                        <option value="Narayanganj">Narayanganj</option>
                        <option value="Narsingdi">Narsingdi</option>
                        <option value="Natore">Natore</option>
                        <option value="Nawabganj">Nawabganj</option>
                        <option value="Netrokona">Netrokona</option>
                        <option value="Nilphamari">Nilphamari</option>
                        <option value="Noakhali">Noakhali</option>
                        <option value="Pabna">Pabna</option>
                        <option value="Panchagarh">Panchagarh</option>
                        <option value="Patuakhali">Patuakhali</option>
                        <option value="Pirojpur">Pirojpur</option>
                        <option value="Rajbari">Rajbari</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Rangamati">Rangamati</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Satkhira">Satkhira</option>
                        <option value="Shariatpur">Shariatpur</option>
                        <option value="Sherpur">Sherpur</option>
                        <option value="Sirajganj">Sirajganj</option>
                        <option value="Sunamganj">Sunamganj</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Tangail">Tangail</option>
                        <option value="Thakurgaon">Thakurgaon</option>
                    </select>
                </div>
                <div class="input">
                    <select name="favourite_genre">
                        <option value="#">Favoutrite Genre</option>
                        <option value="Biography">Biography</option>
                        <option value="Comics">Comics</option>
                        <option value="Ditective">Ditective</option>
                        <option value="Fiction">Fiction</option>
                        <option value="Historical">Historical</option>
                        <option value="Horror">Horror</option>
                        <option value="Islamic">Islamic</option>
                        <option value="Juvenile Literature">Juvenile Literature</option>
                        <option value="Non Fiction">Non-Fiction</option>
                        <option value="Poetry">Poetry</option>
                        <option value="Romance">Romance</option>
                        <option value="Science Fiction">Science Fiction</option>
                        <option value="Thrillers">Thrillers</option>
                    </select>
                </div>
                <div class="input">

                    <input type="text" name="favourite_writer" required placeholder="Favourite Writer">
                </div>
                <div class="input">

                    <input type="email" name="email" required placeholder="Email">
                </div>
                <div class="input">

                    <input type="password" name="password_1" required placeholder="Password">
                </div>
                <div class="input">

                    <input type="password" name="password_2" required placeholder="Confirm Password">
                </div>
                <div>
                    <button type="submit" name="register">Sign Up</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
