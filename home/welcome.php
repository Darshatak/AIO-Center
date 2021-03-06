<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: /login/index.php");
    exit;
}

?>






<!doctype html>
<html lang="en">

<head>
    <title>Welcome-<?php echo $_SESSION['username']?> </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/login/css/bootstrap.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="/login/css/themify-icons.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="/login/css/owl.carousel.min.css">
    <!-- Main css -->
    <link href="/login/css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">

    <!-- Nav Menu -->

    <div class="nav-menu fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-dark navbar-expand-lg">
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> <a class="nav-link active" href="#home">HOME <span class="sr-only">(current)</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#features">FEATURES</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#contact">CONTACT US</a> </li>
                                <li class="nav-item"><a href="/login/logout.php" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Logout</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <header class="bg-gradient" id="home">
        <div class="container mt-5">
        <img src="/login/Media/logo.png" style="height: 160px; width:200px;" alt="logo">   <br><br>     
        <h3 style="color: white;">Hello , <i style="color: white; text-transform: uppercase;"><?php echo $_SESSION['username']?></i></h3>
            <p class="tagline">This Site Provide Most Of The Software, Games of PC And Android. We Also have a Split Subscription Of OTT and Online Platforms </p>
        </div>
        <div class="img-holder mt-13"><img src="/login/media/iphonex.png" alt="phone" class="img-fluid"></div>
    </header>

    <div class="client-logos my-5">
        <div class="container text-center">
            <img src="/login/media/client-logos.png" alt="client logos" class="img-fluid">
        </div>
    </div>

    <div class="section light-bg" id="features">


        <div class="container">

            <div class="section-title">
                <small>We Provide Following</small>
                <h3>Features you love</h3>
            </div>


            <div class="row">
                <div class="col-12 col-lg-4">
                <a class="nav-link.active" href="/login/home/games.php">
                        <div class="card features">
                            <div class="card-body">
                                <div class="media">
                                    <span class="ti-face-smile gradient-fill ti-3x mr-3"></span>
                                    <div class="media-body">
                                        <h4 class="card-title">Games</h4>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="col-12 col-lg-4">
                <a class="nav-link.active" href="/login/home/software.php">
                        <div class="card features">
                            <div class="card-body">
                                <div class="media">
                                    <span class="ti-settings gradient-fill ti-3x mr-3"></span>
                                    <div class="media-body">

                                        <h4 class="card-title">Software</h4>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-12 col-lg-4">
                <a class="nav-link.active" href="/login/home/Ott.php">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <span class="ti-lock gradient-fill ti-3x mr-3"></span>
                                <div class="media-body">
                                    <h4 class="card-title">OTT</h4>
                                    
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer rutrum, urna eu pellentesque </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>


    </div>
    </a>


    <!-- // end .section -->


    
    <!-- // end .section -->



    <div class="section bg-gradient" id="contact">
        <div class=" container ">
            <div class="call-to-action ">

                <div class="box-icon "><span class="ti-mobile gradient-fill ti-3x "></span></div>
                <div class="container" style="display: flex; flex-direction: column; align-items: center; ">
                    <div class="form-group col-md-5">
                        <h3>Contact US</h3>
                        <form action="/login/home/contact.php " method="POST" style="display:grid; ">

                            <input type="text" id="firstname" name="firstname" placeholder="First Name " required /><br>
                            <input type="text" id="lastname" name="lastname" placeholder="Last Name " required><br>                           
                            <input type="email" id="email" name="email" placeholder="Email ID " required>
                            <br>
                            <textarea id="query" name="query" placeholder="Write About Suggestions Or Issue " style="height:200px" required></textarea>
                            <br>
                            <input type="submit" value="Submit" style="border-radius: 40px; ">
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- // end .section -->

    <div class="light-bg py-5 ">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-6 text-center text-lg-left ">
                    <p class="mb-2 "> <span class="ti-location-pin mr-2 "></span> MUMBAI,MAHARASHTRA</p>
                    <div class=" d-block d-sm-inline-block ">
                        <p class="mb-2 ">
                            <span class="ti-email mr-2 "></span> <a class="mr-4 " href="mailto:vyasdarshatak15866@gmail.com ">vyasdarshatak15866@gmail.com</a>
                        </p>
                    </div>
                    <div class="d-block d-sm-inline-block ">
                        <p class="mb-0 ">
                            <span class="ti-headphone-alt mr-2 "></span> <a href="tel:51836362800 ">9876543210</a>
                        </p>
                    </div>

                </div>
                <div class="col-lg-6 ">
                    <div class="social-icons ">
                        <a href="https://www.facebook.com/darshatakvyas" target="_blank"><span class="ti-facebook "></span></a>
                        <a href="https://twitter.com/darshatakvyas" target="_blank"><span class="ti-twitter-alt "></span></a>
                        <a href="https://www.instagram.com/darshatak_vyas/?hl=en" target="_blank"><span class="ti-instagram "></span></a>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- // end .section -->
    <footer class="my-5 text-center ">
        <p class="mb-2 "><small>COPYRIGHT ?? 2021. ALL RIGHTS RESERVED BY <a href="/login/LAR/T&C.html ">Darshatak</a></small></p>
    </footer>


    <!-- jQuery and Bootstrap -->
    <script src="/login/js/jquery-3.2.1.min.js"></script>
    <script src="/login/js/bootstrap.bundle.min.js"></script>
    <!-- Plugins JS -->
    <script src="/login/js/owl.carousel.min.js"></script>
    <!-- Custom JS -->
    <script src="/login/js/script.js"></script>


</body>

</html>