<?php
include 'connect.php';
include 'session.php';
if (!isset($_SESSION['login_user'])) {
    header("location: index.php"); // Redirecting To Home Page
}

$select = "SELECT img_movie, movie, time FROM movie";
$result = mysqli_query($dbcon,$select);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>SWU Cinema | Movies</title>
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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
    <!--[if lt IE 7]>
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, .link1 span, .link1');</script>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>

<body id="page2">
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
                            <li><a href="booking.php"><img src="images/icon3.gif" alt="" /></a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                    <div class="row-2">
                        <ul>
                            <li><a href="cinemaWorld.php">Home</a></li>
                            <li><a href="movies.php" class="active">Movies</a></li>
                            <li><a href="booking.php">Booking</a></li>
                            <li><a href="profile.php">Profile</a></li>
                            <li class="last"><a href="history.php" >History</a></li>
                        </ul>
                    </div>
                </div>
                <div id="content">
                    <div class="line-hor"></div>
                    <div class="box">
                        <div class="border-right">
                            <div class="border-left">
                                <div class="inner">
                                    <h3><span>Movies</span></h3>
                                    <table class="table table-dark" style="width: 100%; height: 100%;">
                                        <tbody>
                                            <?php while ($data = mysqli_fetch_array($result)) {?>
                                            <tr>
                                                <td><a href="booking.php"><img src="<?php echo "admin/".$data['img_movie'] ?>"
                                                            width="208" height="300"></a> </td>
                                                <td>
                                                    <h3><a href="booking.php"><?php echo $data['movie'] ?></a></h3>
                                                    <label><?php echo $data['time'] ?></label>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <?php $i++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="footer">
                    <div class="left">
                        <div class="right">
                            <div class="footerlink">
                            <p class="lf"> &copy; 2019 <a href="#">Srinakharinwirot University</a> </p>
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