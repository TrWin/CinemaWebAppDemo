<?php
include 'connect.php';
include 'session.php';
if (!isset($_SESSION['login_user'])) {
    header("location: index.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>SWU Cinema | Booking</title>
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
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    </script>
    <!--[if lt IE 7]>
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, .link1 span, .link1');</script>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>

<body id="page3">
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
                            <li><a href="booking.php" class="active">Booking</a></li>
                            <li><a href="profile.php">Profile</a></li>
                            <li class="last"><a href="history.php">History</a></li>
                        </ul>
                    </div>
                </div>
                <div id="content">
                    <div class="line-hor"></div>
                    <div class="box">
                        <div class="border-right">
                            <div class="border-left">
                                <div class="inner">
                                    <form action="savebooking.php" method="post" class="needs-validation" novalidate>
                                        <h3>Select <span>Movies</span></h3>
                                        <div class=" form-group">
                                            <select name="movie" id="movie" class="custom-select" required>
                                                <option value="">Open this select movie</option>
                                                <?php
$profile = "SELECT id, movie FROM movie";
$result = mysqli_query($dbcon, $profile);
$arr = array();
$i = 1;
while ($show = mysqli_fetch_array($result)) {
    $data[$i] = array('id' => $show['id'], 'movie' => $show['movie']);?>
                                                <option value="<?php echo $show['id'] ?>"><?php echo $show['movie']; ?>
                                                </option>
                                                <?php
$i++;
}?>
                                            </select>
                                            <div class="invalid-feedback">Example invalid custom select
                                                feedback</div>
                                        </div>
                                        <h3>Select <span>Seat</span></h3>
                                        <div class="img-box1 alt"><img src="images/screen.jpg" alt="" width="400"
                                                height="238" />
                                            <div class="item">
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-3">
                                                        <h4 for="validationCustom01">Select Date</h4>
                                                        <input class="form-control" type="date" id="date" name="date"
                                                            value="2019-01-01">
                                                        <div class="invalid-feedback">Example invalid custom select
                                                            feedback</div>
                                                    </div>
                                                </div>
                                                <div class="form_row">
                                                    <h4>Show Time</h4>
                                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                        <?php
$profile = "SELECT id,time_start,theater_id FROM showtime";
$result = mysqli_query($dbcon, $profile);
$arr = array();

while ($show = mysqli_fetch_array($result)) {
    $data[$i] = array('id' => $show['id'], 'time_start' => $show['time_start'], 'theater_id' => $show['theater_id']);?>
                                                        <label class="btn btn-secondary">
                                                            <input id="time" name="time"
                                                                value="<?php echo "$show[id]" . "-" . "$show[theater_id]"; ?>"
                                                                type="radio" name="options" autocomplete="off"
                                                                checked><?php echo " $show[time_start]"; ?></label>
                                                        <?php } ?>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col-md-12 mb-3">
                                                            <h4 for="validationCustom01">Seat<a>($100 per ticket)</a>
                                                            </h4>

                                                            <select name="seat" class="custom-select" required>
                                                                <option value="">Open this select seat</option>
                                                                <?php
$select = "SELECT id,seat_id FROM seat";
$result2 = mysqli_query($dbcon, $select);
$arr2 = array();
$j = 1;
while ($show2 = mysqli_fetch_array($result2)) {
    $data2[$j] = array('id' => $show2['id'], 'seat_id' => $show2['seat_id']);?>
                                                                <option value="<?php echo $show2['id'] ?>">
                                                                    <?php echo $show2['seat_id']; ?>
                                                                </option>
                                                                <?php
$j++;
    mysqli_close($dbcon);}?>
                                                            </select>
                                                            <div class="invalid-feedback">Example invalid custom select
                                                                feedback</div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-success" type="submit">Confirm</button>
                                                </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="footer">
                <div class="left">
                    <div class="right">
                        <div class="footerlink">
                            <p class="lf"> &copy; 2019 <a href="#">Srinakharinwirot University</a></p>
                            <p class="rf">Design by <a href="">Suwit Thongraar<br>Sumintra Lanwong<br>Chanapai
                                    Mookdagun</a></p>
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