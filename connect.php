<?php

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];


//Database Connection

$conn = new mysqli('localhost:330','root','','users');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO lar (username, email, password) VALUES (?,?,?)");
    $stmt->bind_param("sss",$username, $email, $password);
    $execval = $stmt->execute();
    echo $execval;
    header("location: /login/index.php");
    $stmt->close();
$conn->close();
}


?>











