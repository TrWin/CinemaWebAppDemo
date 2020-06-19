<?php
include 'connect.php';
include 'session.php';
if (!isset($_SESSION['login_user'])) {
    header("location: profile.php"); // Redirecting To Home Page
}

$password = $_POST['password'];
$email = $_POST['email'];
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$customerid = $_POST['customerid'];
$birthday= $_POST['birthday'];
$telephone = $_POST['telephone'];

$dbs = "UPDATE customer SET
        customer_firstname = '$firstName',
        customer_lastname = '$lastName',
        customer_id = '$customerid',
        birthday = '$birthday',
        email = '$email',
        telephone = '$telephone',
        password = '$password' where username = '$login_session'";
$result = mysqli_query($dbcon,$dbs);

if($result){
    header("location: profile.php");
}else{
    echo "error".mysqli_error($dbcon);
}

mysqli_close($dbcon);