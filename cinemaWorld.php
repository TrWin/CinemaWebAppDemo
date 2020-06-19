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
  <title>SWU Cinema</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
  <script src="js/cufon-yui.js" type="text/javascript"></script>
  <script src="js/cufon-replace.js" type="text/javascript"></script>
  <script src="js/Gill_Sans_400.font.js" type="text/javascript"></script>
  <script src="js/script.js" type="text/javascript"></script>

</head>

<body id="page1">
  <!-- START PAGE SOURCE -->
  <div class="tail-top">
    <div class="tail-bottom">
      <div id="main">
        <div id="header">
          <div class="row-1">
            <div class="fleft"><a href="#">SWU <span>Cinema</span></a></div>
            <ul>
              <li><a href="cinemaWorld.php"><img src="images/icon1-act.gif" alt="" /></a></li>
              <li><a href="profile.php"><img src="images/icon2.gif" alt="" /></a></li>
              <li><a href="booking.php"><img src="images/icon3.gif" alt="" /></a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </div>
          <div class="row-2">
              <ul>
                  <li><a href="cinemaWorld.php"class="active">Home</a></li>
                  <li><a href="movies.php">Movies</a></li>
                  <li><a href="booking.php">Booking</a></li>
                  <li><a href="profile.php" >Profile</a></li>
                  <li class="last"><a href="history.php" >History</a></li>
                  
                </ul>
          </div>
        </div>
        <div id="content">
          <div id="slogan">
            <div class="image png"></div>
            <div class="inside">
              <h2>movie tickets<span>online</span></h2>
              <p>
                เนื่องจากการดูภาพยนตร์เป็นที่นิยมมากในปัจจุบันด้วยความสะดวกสบายไม่ต้องเสียเวลาในการเดินทางจึงก่อให้เกิดความต้องการในการจองตั๋วภาพยนตร์ผ่านเว็บไซต์มากขึ้นและการจองตั๋วภาพยนตร์จึงเป็นการอำนวยความสะดวกให้กับลูกค้าอีกแบบหนึ่งของโรงภาพยนตร์
              </p>
              <div class="wrapper"><a href="#" class="link1"><span><span>Learn More</span></span></a></div>
            </div>
          </div>

        <div class="content">
          <h3>Coming soon <span>Movies</span></h3>
          <ul class="movies">
            <li>
              <h4>Toy Story 3</h4>
              <img src="images/1page-img2.jpg" alt="" />
              <div class="wrapper"><a href="#" class="link2"><span><span>Read More</span></span></a></div>
            </li>
            <li>
              <h4>Prince of Percia: Sands of Time</h4>
              <img src="images/1page-img3.jpg" alt="" />
              <div class="wrapper"><a href="#" class="link2"><span><span>Read More</span></span></a></div>
            </li>
            <li class="last">
              <h4>The Twilight Saga: Eclipse</h4>
              <img src="images/1page-img4.jpg" alt="" />
              <div class="wrapper"><a href="#" class="link2"><span><span>Read More</span></span></a></div>
            </li>
            <li class="clear">&nbsp;</li>
          </ul>
        </div>
      </div>
      <div id="footer">
        <div class="left">
          <div class="right">
            <div class="footerlink">
              <p class="lf"> &copy; 2019 <a href="#">Srinakharinwirot University</a> </p>
              <p class="rf">Design by <a href="">Suwit Thongraar<br>Sumintra Lanwong<br>Chanapai Mookdagun</a></p>
              <div style="clear:both;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script type="text/javascript"> Cufon.now(); </script>
  <!-- END PAGE SOURCE -->
</body>

</html>