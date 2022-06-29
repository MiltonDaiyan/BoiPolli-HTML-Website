<!DOCTYPE html>
<html lang="en">

<head>
    <title>World Literature</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="page_style.css" type="text/css">

    <style>
        .book_link{
            padding-bottom:200px;
        }
        </style>
    
</head>

<body>

    <nav class=" navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <img src="../logo.png" alt="logo" id="boipolli_logo">
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="../home_page.php">Home</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        E-Library
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../Bangla Literature/bangla_literature.php">Bengali Literature</a><br>
                        <a class="dropdown-item" href="world_literature.php">World Literature</a>
                    </div>
                </li>
                <li><a href="../creative_writings.php">Creative Writings</a></li>
                <li><a href="../upload.php">Send Writings</a></li>
            </ul>
        </div>
    </nav>

    <section class="sectiion-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="Alexander Belayev.jpg" class="l_box1">
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card  mb-3 h-80 p-4" id="custom-content">
                        <h5 class="custom-color">Alexander Belyaev</h5>
                        <p>Alexander Belyaev was a Soviet Russian writer of science fiction. His works from the 1920s and 1930s made him a highly regarded figure in Russian science fiction, often referred to as "Russia's Jules Verne".Belyaev's best known books include Professor Dowell's Head, Amphibian Man, Ariel, and The Air Seller.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="book_link">
            <ol>
                <li><a href="https://drive.google.com/file/d/1gEp0I0leHNp08h8lBn5_zgkA5npUVJUk/view?usp=sharing">The Amphibian Man</a></li>
            </ol>
        </div>
    </section>

    <section class="footer-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer pb-2 pt-2">
                        <p class="text-center">BoiPolli @ Copyright-2021 | Design By Friends & Co.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
