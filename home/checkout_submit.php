<?php

$fname = $_POST["fname"];
$email = $_POST["email"];
$address = $_POST["address"];
$cardname = $_POST["cardname"];
$cardnumber = $_POST["cardnumber"];
$expyear = $_POST["expyear"];
$cvv = $_POST["cvv"];
$plans1 = $_POST["plans"];


//Database Connection

$conn = new mysqli('localhost:330','root','','users');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO checkout (full_name, email, address,card_name,card_number,exp_year,cvv,plans) VALUES (?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssss",$fname, $email, $address,$cardname, $cardnumber, $expyear,$cvv, $plans1);
    $execval = $stmt->execute();
    echo $execval;
    header("location: /login/home/success.php");
    $stmt->close();
$conn->close();
}


?>
