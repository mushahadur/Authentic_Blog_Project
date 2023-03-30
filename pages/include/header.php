<?php session_start();?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
     <link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../assets/css/all.css"/>
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link href="../assets/css/owl.carousel.css" rel="stylesheet">
    <link href="../assets/css/owl.theme.css" rel="stylesheet">
</head>
<body>

<!--This is Banner Section Start-->

<section class="pt-5">
    <div class="container">

    <?php if(isset($_SESSION['id'])) { ?>
                        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                            <a class="navbar-brand text-white " href="#"><img class="logo-img" src="../assets/img/logo.png" alt="" style=""></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse ml-0" id="navbarTogglerDemo02">
                                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                                    <li class="nav-item "><a class="nav-link" href="./home.php">Add Post </a></li>
                                    <li class="nav-item "><a class="nav-link" href="">Manage Post </a></li>
                                    <li class="nav-item "><a class="nav-link" href="action.php?status=logout">Logout </a></li>
                                </ul>
                                
                            </div>
                        </nav>
                        <?php  } else{ ?>
        <div class="banner-section">
            <div class="image-overlay">
                <div class="row">
                    <div class="col-md-10 mx-auto">

                    

                        <nav class="navbar  navbar-expand-md nab-bg-color py-0">
                            <a class="navbar-brand text-white " href="#"><img class="logo-img" src="../assets/img/logo.png" alt=""></a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <div class="navbar-nav mx-auto py-0  ml-auto mt-lg-0">
                                    <ul class="navbar-nav mx-auto py-0  ml-auto mt-lg-0">
                                        <li class="nav-item nav-btn"><a class="py-4 px-3 nav-link  text-white" href="#features">FEATURES</a></li>
                                        <li class="nav-item nav-btn"><a class="py-4 px-3 nav-link text-white" href="#work">WORKS</a></li>
                                        <li class="nav-item nav-btn"><a class="py-4 px-3 nav-link text-white" href="#team">OUR TEAM</a></li>
                                        <li class="nav-item nav-btn"><a class="py-4 px-3 nav-link text-white" href="#testimonial">TESTIMONIALS</a></li>
                                        <li class="nav-item nav-btn"><a class="py-4 px-3 nav-link text-white" href="#download">DOWNLOAD</a></li>
                                        <li class="nav-item nav-btn"><a class="py-4 px-3 nav-link text-white" href="action.php?status=index">BLOG</a></li>
                                        <li class="nav-item nav-btn"><a class="py-4 px-3 nav-link text-white" href="./login.php">LOGIN</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                     


                        <hr style="padding-top: 0; height:2px;width: 100%; color:lightgoldenrodyellow;background-color:lightgoldenrodyellow">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body text-center bg-transparent border-0 title ">
                            <h1 class="fw-bold text-white" style=" font-size: 42px ;">YOUR FAVORITE ONE PAGE <br>MULTI PURPOSE TEMPLATE</h1>

                            <p class="text-light pt-1 text-center " style="font-size: 16px ; text-decoration-color: whitesmoke">lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply industry.
                                <br> Lorem Ipsum is simply industry.</p>
                            <div class="" style="margin-top:40px;">
                                <button type="button" class="border-0 text-white px-3" style="background-color:rgb(186, 36, 38) ; font-size: 13px; padding: 8px;">FIND OUT MORE</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php  } ?>
</section>
<!--This is Banner Section End-->