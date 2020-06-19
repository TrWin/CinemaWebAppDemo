<?php
include 'connect.php';
include 'session.php';
if (!isset($_SESSION['login_user'])) {
    header("location: index.php"); // Redirecting To Home Page
}
$movie = $_POST['movie'];
$date = $_POST['date'];
$time = $_POST['time'];
$seat = $_POST['seat'];
$time_explode = explode('-', $time); // ขั้นด้วย '-

$time_id = $time_explode[0];
$theater_id = $time_explode[1];

$profile = "SELECT id FROM customer where username = '$login_session'";
$res = mysqli_query($dbcon, $profile);
$data = mysqli_fetch_assoc($res);
$dt = $data['id'];

$dbs = "INSERT INTO custombook(customer_id,movie_id,seat_id,date,time_id) VALUES('$dt','$movie','$seat','$date','$time_id')";

$result = mysqli_query($dbcon, $dbs);

if ($result) {
    header("location: index.php");
} else {
    echo "error" . mysqli_error($dbcon);
}

mysqli_close($dbcon);
