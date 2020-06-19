<?php
$dbcon = mysqli_connect('localhost', 'root', 'Win102541', 'cinema')
or die('error' . mysqli_connect_error());

$select = "SELECT movie.movie,seat.seat_id,showtime.time_start  FROM custombook 
INNER JOIN movie 
ON  (custombook.movie_id = movie.id)
INNER JOIN seat 
ON (custombook.seat_id = seat.id)
INNER JOIN showtime 
ON (custombook.time_id = showtime.id)
ORDER BY custombook.id ";

$result = mysqli_query($dbcon,$select);

?>