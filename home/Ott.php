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

            <h1>OTT</h1><br><br>
            <div class="section light-bg" id="feature">
        <div class="container">
        <div class="section light-bg" id="Subscription">

<div class="container">
    <div class="row">
        <div class="col-md-8 d-flex align-items-center">
            <ul class="list-unstyled ui-steps">
                <li class="media">
                    <div class="circle-icon mr-4">1</div>
                    <div class="media-body">
                        <h5>Choose any plans</h5>
                        <p>Choose the best convinent plan that suits you from differnt plans. </p>
                    </div>
                </li>
                <li class="media my-4">
                    <div class="circle-icon mr-4">2</div>
                    <div class="media-body">
                        <h5>Make Payments</h5>
                        <p>you can checkout by debit card or net-banking.</p>
                    </div>
                </li>
                <li class="media">
                    <div class="circle-icon mr-4">3</div>
                    <div class="media-body">
                        <h5>Enjoy your life</h5>
                        <p>We glad to serve you.</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-md-4">
            <img src="/login/media/iphonex.png" alt="iphone" class="img-fluid">
        </div>

    </div>

</div>

</div>

<!-- // end .section -->





<div class="section">
<div class="container">
    <div class="section-title">
        <small>PRICING</small>
        <h3>Upgrade to Pro</h3>
    </div>

    <div class="card-deck">
        <div class="card pricing">
            <div class="card-head">
                <small class="text-primary">Level 1 Plan</small>
                <span class="price">₹299<sub>/m</sub></span>
            </div>
            <ul class="list-group list-group-flush">
            <div class="list-group-item">1 profile</div>
                <div class="list-group-item">password is Not changeble</div>
                <div class="list-group-item">Only for INDIAN Users</div>
                <div class="list-group-item">Limit of 2 time of OTP</div>
                <div class="list-group-item">Support in 48 Hours</div>
            </ul>
            <div class="card-body">
                <a href="/login/home/checkout.php" class="btn btn-primary btn-lg btn-block">Choose this Plan</a>
            </div>
        </div>
        <div class="card pricing popular">
            <div class="card-head">
                <small class="text-primary">Level 2 Plan</small>
                <span class="price">₹599<sub>/m</sub></span>
            </div>
            <ul class="list-group list-group-flush">
            <div class="list-group-item">1 profile</div>
                <div class="list-group-item">password is changeble</div>
                <div class="list-group-item">Only for INDIAN Users</div>
                <div class="list-group-item">limit of 10 times of OTP</div>
                <div class="list-group-item">Personal Support in 24hrs</div>
            </ul>
            <div class="card-body">
                <a href="/login/home/checkout.php" class="btn btn-primary btn-lg btn-block">Choose this Plan</a>
            </div>
        </div>

        <div class="card pricing">
            <div class="card-head">
                <small class="text-primary">Level 3 Plan</small>
                <span class="price">₹999<sub>/m</sub></span>
            </div>
            <ul class="list-group list-group-flush">
                <div class="list-group-item">1 profile</div>
                <div class="list-group-item">password is changeble</div>
                <div class="list-group-item">Only for INDIAN Users</div>
                <div class="list-group-item">Get Unlimited OTP</div>
                <div class="list-group-item">Personal Support in 1hrs</div>
            </ul>
            <div class="card-body">
                <a href="/login/home/checkout.php" class="btn btn-primary btn-lg btn-block">Choose this Plan</a>
            </div>
        </div>
    </div>
    

</div>

</div>
<hr  id="faq"><br><br>
<!-- // end .section -->
<div >
<div class="section pt-0" >
<div class="container">
    <div class="section-title" id="faq">
        <small>FAQ</small>
        <h3>Frequently Asked Questions</h3>
    </div>

    <div class="row pt-4">
        <div class="col-md-6">
            <h4 class="mb-3">Can I try before I buy?</h4>
            <p class="light-font mb-5">LNo, you cannot but you will get 3mins of trial. </p>
            <h4 class="mb-3">What payment methods do you accept?</h4>
            <p class="light-font mb-5">We accept any mode of payments. </p>

        </div>
        <div class="col-md-6">
            <h4 class="mb-3">Can I change my plan later?</h4>
            <p class="light-font mb-5">No, you cannot. </p>
            <h4 class="mb-3">Do you have a contract?</h4>
            <p class="light-font mb-5">Yes, We have and if anything happens to plan or disrupt of our service then instant replacement will be done. </p>

        </div>
    </div>
</div>

</div>
</div>
        </div>
        


</div>
</div></header>
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






