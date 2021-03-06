<?php

session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: /login/index.php");
    exit;
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/login/css/GS.css">
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
                        <a class="navbar-brand" href="/login/welcome.html"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> <a class="nav-link active" href="/login/home/welcome.php">HOME <span class="sr-only">(current)</span></a> </li>
                                <li class="nav-item"><a href="/login/logout.php" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Logout</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div> 





    <header class="bg-gradient" id="home">

            <h1>Games</h1><br><br>
            <div class="section light-bg" id="feature">
        <div class="container">


<div style="color: black;">

                    <div class="d-flex flex-column flex-lg-row">

                    <img style="width: 200px;" src="data:image/jpeg;base64,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" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                        <a target="_blank" href="https://store.steampowered.com/app/243470/Watch_Dogs/"><div>
                        <div class="desc">
                            <hr><h3>Watch Dogs </h3><br><hr>Watch Dogs is an action-adventure video game franchise developed and published by Ubisoft. The series' eponymous first title was released in 2014, and it has featured three games in total, the most recent being 2020's Watch Dogs: Legion.</div>
                    </div>
</a>
                    </div>
                    <br>

                    <div class="d-flex flex-column flex-lg-row">
                        <img style="width: 200px;" src="https://steamcdn-a.akamaihd.net/steam/apps/307690/capsule_616x353.jpg?t=1592488701" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                        <a target="_blank" href="https://store.steampowered.com/agecheck/app/202170/"><div>
                        <div class="desc">
                        <hr><h3>Sleeping Dogs  </h3><br><hr>Sleeping Dogs is an action-adventure video game developed by United Front Games and published by Square Enix's European subsidiary. It was originally released for PlayStation 3, Xbox 360 and Windows in 2012.</div>
                    </div>
</a>
                    </div>
                    <br>     
                    <div class="d-flex flex-column flex-lg-row">
                    <img style="width: 200px;" src="https://www.themarysue.com/wp-content/uploads/2014/12/gta-v-promo.jpg" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                        <a target="_blank" href="https://store.steampowered.com/agecheck/app/271590/"><div>
                        <div class="desc">
                        <hr><h3>GTA V  </h3><br><hr>Grand Theft Auto V is a 2013 action-adventure game developed by Rockstar North and published by Rockstar Games. It is the first main entry in the Grand Theft Auto series since 2008's Grand Theft Auto IV.</div>
                    </div>
</a>
                    </div>
                    <br>
                    
          
                            
                        </div>
                    </div>
                </div>
        </div></div></header>
        </div>




        <ul style="display: flex; flex-direction: column; align-items: center;">
                                <li class="nav-item"><a href="/login/home/welcome.php" class="btn btn-outline-dark my-3 my-sm-0 ml-lg-3" style="background-color:aliceblue; color: black;">Back</a></li>
                            </ul>


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
