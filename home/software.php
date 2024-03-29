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

            <h1>Software</h1><br><br>
            <div class="section light-bg" id="feature">
        <div class="container">


<div style="color: black;">

                    <div class="d-flex flex-column flex-lg-row">

                    <img style="width: 200px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Adobe_Photoshop_CC_icon.svg/1200px-Adobe_Photoshop_CC_icon.svg.png" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                        <a target="_blank" href="https://www.adobe.com/in/creativecloud/plans.html?filter=photography&promoid=5NHJ8B3H&mv=other&plan=individual"><div>
                        <div class="desc">
                            <hr><h3>adobe photoshop  </h3><br><hr>Adobe Photoshop is a raster graphics editor developed and published by Adobe Inc. for Windows and macOS. It was originally created in 1988 by Thomas and John Knoll. Since then, the software has become the industry standard not only in raster graphics editing, but in digital art as a whole.</div>
                    </div>
</a>
                    </div>
                    <br>

                    <div class="d-flex flex-column flex-lg-row">
                        <img style="width: 200px;" src="https://store-images.s-microsoft.com/image/apps.189.14121511789296356.b1cd9e56-07b3-4312-abb8-d71eecbef69b.926b1076-3549-4c89-93d6-c4dfae683240" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                        <a target="_blank" href="https://www.coreldraw.com/en/?link=wm"><div>
                        <div class="desc">
                        <hr><h3>Coral Draw 15  </h3> <br><hr>CorelDRAW is a vector graphics editor developed and marketed by Corel Corporation. It is also the name of the Corel graphics suite, which includes the bitmap-image editor Corel Photo-Paint as well as other graphics-related programs.</div>
                    </div>
</a>
                    </div>
                    <br>     
                    <div class="d-flex flex-column flex-lg-row">
                    <img style="width: 200px;" src="https://upload.wikimedia.org/wikipedia/en/thumb/7/78/XAMPP_logo.svg/1200px-XAMPP_logo.svg.png" alt="graphic" class="img-fluid rounded align-self-start mr-lg-5 mb-5 mb-lg-0">
                        <a target="_blank" href="https://www.apachefriends.org/download.html"><div>
                        <div class="desc">
                        <hr><h3>Xampp Server   </h3><br><hr>XAMPP is a free and open-source cross-platform web server solution stack package developed by Apache Friends, consisting mainly of the Apache HTTP Server, MariaDB database, and interpreters for scripts written in the PHP and Perl programming languages.</div>
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
        <p class="mb-2 "><small>COPYRIGHT © 2021. ALL RIGHTS RESERVED BY <a href="/login/LAR/T&C.html ">Darshatak</a></small></p>
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
