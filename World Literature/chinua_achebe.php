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
            padding-bottom:90px;
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
                        <img src="Chinua Achebe.jpg" class="l_box1">
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card  mb-3 h-80 p-4" id="custom-content">
                        <h5 class="custom-color">Chinua Achebe</h5>
                        <p>Chinua Achebe was a Nigerian novelist, poet, professor, and critic. His first novel Things Fall Apart, often considered his masterpiece, is the most widely read book in modern African literature </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="book_link">
            <ol>
                <li><a href="https://drive.google.com/file/d/1PcZ0uC0BBa-vxBzMVJ_bQfGXhqzhbO_d/view?usp=sharing">Things Fall Apart</a></li>
                <li><a href="https://drive.google.com/file/d/1il6-X6X134LWx8Mm5t-Gw1fygYkY_fFI/view?usp=sharing">No longer at Ease</a></li>
                <li><a href="https://drive.google.com/file/d/1KREWv-MEF0ELKSS9H7n_YA9wLP3hrpnI/view?usp=sharing">Arrow of God</a></li>
            
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
