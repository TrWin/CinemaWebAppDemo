<?php
include 'connect.php';
include 'session.php';
if (!isset($_SESSION['login_user'])) {
    header("location: movie.php"); // Redirecting To Home Page
}
$id=isset($_GET['id']) ? $_GET['id']:'';


$dbs = "DELETE FROM movie WHERE id ='".$id."' " ;
$result = mysqli_query($dbcon,$dbs);

if($result){
    header("location: movie.php");
}else{
    echo "error".mysqli_error($dbcon);
}

mysqli_close($dbcon);