<?php
include 'connect.php';

$dbs = "SELECT * FROM customer";
$result = mysqli_query($dbcon,$dbs);