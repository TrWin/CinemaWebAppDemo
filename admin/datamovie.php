<?php
include 'connect.php';

$dbs = "SELECT * FROM movie";
$movie = mysqli_query($dbcon,$dbs);