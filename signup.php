<?php
$server ="localhost";
$user ="root";
$password ="";
$db="users";

$conn = mysqli_connect($server, $user, $password, $db);
if ($conn){
}
else{
    ?>
    <script>
    alert("NO connection");
    </script>
        <?php
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="/login/css/LAR.css" media="screen" />
    <link type="text/css" rel="stylesheet" href="/login/css/bootstrap.min.css" media="screen" />
    <title>Signup</title>
</head>
<body background="/login/Media/bg1.jpg">

<div class="wrapper fadeInDown">
  <div id="formContent">

  <div  class="center" style=" height:0%">
<img  src="/login/Media/logo.png">
</div>
    <!-- Tabs Titles -->
    <a href="index.php"><h2 class="inactive underlineHover"> Sign In </h2></a>
    <a href="signup.php"><h2 class="active">Sign Up </h2></a>
    <br><br>
    <!-- Login Form -->
    <form action="/login/connect.php" method="POST">
        <input type="text" id="username" class="fadeIn second" name="username" placeholder="Username" required>
        <input type="email" id="email" class="fadeIn second" name="email" placeholder="Email-ID" required>
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required>
        <br><br><br>
        <input type="reset" class="fadeIn fourth" value="clear">
        <input type="submit" class="fadeIn fourth" value="Sign UP">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
    <a class="underlineHover" style="text-decoration: none;" target="_blank" href="/login/T&C.html"><h1 class="text-center" style="font-size: 14px; color:blue; ">By signing up you will accept our T&C*</h1></a>    </div>

</div></div>


</body>
</html>