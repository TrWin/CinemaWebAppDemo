<?php
include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$id = $_POST['id'];
$birth= $_POST['birth'];
$telephone = $_POST['telephone'];

$dbs= "INSERT INTO customer(username,password,email,customer_firstname,customer_lastname,customer_id,birthday,telephone) VALUES('$username','$password','$email','$firstName','$lastName','$id','$birth','$telephone')";

$result = mysqli_query($dbcon,$dbs);

if($result){
    header("location: index.php");
}else{
    echo "error".mysqli_error($dbcon);
}

mysqli_close($dbcon);
