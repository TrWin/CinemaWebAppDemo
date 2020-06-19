<?php
include 'connect.php';
include 'session.php';
if (!isset($_SESSION['login_user'])) {
    header("location: index.php"); // Redirecting To Home Page
}
$profile = "SELECT * FROM customer where username = '$login_session'";
$result = mysqli_query($dbcon, $profile);
$data = mysqli_fetch_assoc($result);
mysqli_close($dbcon);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>SWU Cinema | Profile</title>
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

    <!--[if lt IE 7]>
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, .link1 span, .link1');</script>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>

<body id="page4">
    <!-- START PAGE SOURCE -->
    <div class="tail-top">
        <div class="tail-bottom">
            <div id="main">
                <div id="header">
                    <div class="row-1">
                        <div class="fleft"><a href="#">SWU <span>Cinema</span></a></div>
                        <ul>
                            <li><a href="cinemaWorld.php"><img src="images/icon1.gif" alt="" /></a></li>
                            <li><a href="profile.php"><img src="images/icon2-act.gif" alt="" /></a></li>
                            <li><a href="booking.php"><img src="images/icon3.gif" alt="" /></a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </div>
                    <div class="row-2">
                        <ul>
                            <li><a href="cinemaWorld.php">Home</a></li>
                            <li><a href="movies.php">Movies</a></li>
                            <li><a href="booking.php">Booking</a></li>
                            <li><a href="profile.php" class="active">Profile</a></li>
                            <li class="last"><a href="history.php" >History</a></li>
                        </ul>
                    </div>
                </div>
                <div id="content">
                    <div class="line-hor"></div>
                    <div class="box">
                        <table class="table table-dark" style="width: 100%; height: 100%;">
                            <tbody>
                                <tr>
                                    <th scope="row">ชื่อ-นามสกุล:</th>
                                    <?php
                                    echo "<td>$data[customer_firstname]&nbsp;&nbsp;$data[customer_lastname]</td><td></td>"
                                    ?>
                                </tr>
                                <tr>
                                    <th scope="row">รหัสบัตรประชาชน:</th>
                                    <?php
                                    echo "<td>$data[customer_id]</td>"
                                    ?>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">วันเกิด:</th>
                                    <?php
                                    echo "<td>$data[birthday]</td>"
                                    ?>
                                    <td></td>

                                </tr>
                                <tr>
                                    <th scope="row">อีเมลล์:</th>
                                    <?php
                                    echo "<td>$data[email]</td>"
                                    ?>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">เบอร์โทร:</th>
                                    <?php
                                    echo "<td>$data[telephone]</td>"
                                    ?>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">username:</th>
                                    <?php
                                    echo "<td>$data[username]</td>"
                                    ?>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">password:</th>
                                    <?php
                                    echo "<td>$data[password]</td>"
                                    ?>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <form action="updateID.php" method="post">
                            <button type="button" class="btn btn-outline-light" data-toggle="modal"
                                data-target="#exampleModal" data-whatever="@mdo">Edit</button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="hidden" name="id" id="id" value="">
                                            <div class="form-group">
                                                <label for="firstname">firstname</label>
                                                <?php
                                          echo "<input class='form-control' type='text' name='firstname' id='firstname' value='$data[customer_firstname]'>";
                                          ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="lastname">lastname</label>
                                                <?php
                                          echo "<input class='form-control' type='text' name='lastname' id='lastname' value='$data[customer_lastname]'>";
                                          ?>
                                          </div>
                                          <div class="form-group">
                                                    <label for="birthday">birthday</label>
                                                    <?php
                                          echo "<input class='form-control' type='date' name='birthday' id='birthday' value='$data[birthday]'>";
                                          ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="customerid">id</label>
                                                    <?php
                                          echo "<input class='form-control' type='text' name='customerid' id='customerid' value='$data[customer_id]'>";
                                          ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">email</label>
                                                    <?php
                                          echo "<input class='form-control' type='email' name='email' id='email' value='$data[email]'>";
                                          ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="telephone">telephone</label>
                                                    <?php
                                          echo "<input class='form-control' type='text' name='telephone' id='telephone' value='$data[telephone]'>";
                                          ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="username">username: </label>
                                                    <?php
                                          echo "<label class='form-control'>$data[username]</label>";
                                          ?>
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">password</label>
                                                    <?php
                                          echo "<input class='form-control' type='password' name='password' id='password' value='$data[password]'>";
                                          ?>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <input  type="submit" class="btn btn-primary" name="name" value="Save">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
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