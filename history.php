<?php
include 'session.php';
if (!isset($_SESSION['login_user'])) {
    header("location: index.php"); // Redirecting To Home Page
}
$dbcon = mysqli_connect('localhost', 'root', 'Win102541', 'cinema')
or die('error' . mysqli_connect_error());

$select = "SELECT movie.movie,seat.seat_id,custombook.date,showtime.time_start  FROM custombook 
INNER JOIN movie 
ON  (custombook.movie_id = movie.id)
INNER JOIN seat 
ON (custombook.seat_id = seat.id)
INNER JOIN showtime 
ON (custombook.time_id = showtime.id)
WHERE custombook.customer_id = '$id_session'
ORDER BY custombook.id ";

$result = mysqli_query($dbcon,$select);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>SWU Cinema | History</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script>
    <script src="js/Gill_Sans_400.font.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
    <link rel="stylesheet" href="importfile/bootstrap.min.css" />
    <script src="importfile/jquery-3.4.1.min.js"></script>
    <script src="importfile/bootstrap.min.js"></script>

</head>

<body id="page5">
    <!-- START PAGE SOURCE -->
    <div class="tail-top">
        <div class="tail-bottom">
            <div id="main">
                <div id="header">
                    <div class="row-1">
                        <div class="fleft"><a href="#">SWU <span>Cinema</span></a></div>
                        <ul>
                            <li><a href="cinemaWorld.php"><img src="images/icon1.gif" alt="" /></a></li>
                            <li><a href="profile.php"><img src="images/icon2.gif" alt="" /></a></li>
                            <li><a href="booking.php"><img src="images/icon3-act.gif" alt="" /></a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                    <div class="row-2">
                        <ul>
                            <li><a href="cinemaWorld.php">Home</a></li>
                            <li><a href="movies.php">Movies</a></li>
                            <li><a href="booking.php">Booking</a></li>
                            <li><a href="profile.php">Profile</a></li>
                            <li class="last"><a href="history.php" class="active">History</a></li>
                        </ul>
                    </div>
                </div>
                <div id="content">
                    <div class="line-hor"></div>
                    <table class="table table-striped table-dark" style="width: 100%; height: 100%;">
                        <thead style="font-size: 20px;">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Movie</th>
                                <th scope="col">Seat</th>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $i = 1;
while ($data = mysqli_fetch_array($result)) {?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $data[0] ?></td>
                                <td><?php echo $data[1] ?></td>
                                <td><?php echo $data[2] ?></td>
                                <td><?php echo $data[3] ?></td>
                            </tr>
                            <?php $i++;
}?>

                        </tbody>
                    </table>
                </div>
                <div id="footer">
                    <div class="left">
                        <div class="right">
                            <div class="footerlink">
                            <p class="lf"> &copy; 2019 <a href="#">Srinakharinwirot University</a> -</p>
              <p class="rf">Design by <a href="">Suwit Thongraar<br>Sumintra Lanwong<br>Chanapai Mookdagun</a></p>
                                </p>
                                <div style="clear:both;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    Cufon.now();
    </script>
    <!-- END PAGE SOURCE -->
</body>

</html>