<?php

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$query = $_POST["query"];


//Database Connection

$conn = new mysqli('localhost:330','root','','users');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO query (firstname, lastname, email, query) VALUES (?,?,?,?)");
    $stmt->bind_param("ssss",$firstname,$lastname, $email, $query);
    $execval = $stmt->execute();
    echo $execval;
    header("location: /login/home/welcome.php");
    $stmt->close();
$conn->close();
}
?>










