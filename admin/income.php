<?php
include 'connect.php';
include 'session.php';
if (!isset($_SESSION['login_user'])) {
    header("location: income.php"); // Redirecting To Home Page
}
$select = "SELECT movie.movie,COUNT(custombook.movie_id)  FROM custombook 
INNER JOIN movie 
ON  (custombook.movie_id = movie.id)
GROUP BY custombook.movie_id ";

$result = mysqli_query($dbcon,$select);
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <title>
        admin
    </title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="blue">

            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <lu class="nav">
                    <li>
                        <a href="./customer.php">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>CUSTOMER</p>
                        </a>

                    <li>
                        <a href="./movie.php">
                            <i class="now-ui-icons education_atom"></i>
                            <p>movie</p>
                        </a>
                    </li>
                    <li>
                        <a href="./historybooking.php">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>history</p>
                        </a>
                    </li>

                    <li class="active ">
                        <a href="./income.php">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>income</p>
                        </a>
                    </li>
                    <li>
                        <a href="./logout.php">
                            <p>Logout</p>
                        </a>
                    </li>

                    </ul>
            </div>
        </div>
        <div class="main-panel" id="main-panel ">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo">income</a>
                    </div>

                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <a class="nav-link" href="#pablo">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>
                                <span class="d-lg-none d-md-block">Account</span>
                            </p>
                        </a>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">

                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th scope="col">#</th>
                                            <th scope="col">Movie</th>
                                            <th scope="col">Income</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $price = 0;
                                            $i = 1;
while ($data = mysqli_fetch_array($result)) {
    $price += $data[1]*100; ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                
                                                <td><?php echo $data[0]; ?></td>
                                                
                                                <td><?php echo "$".($data[1]*100); ?></td>
                                                
                                            </tr>
                                            <?php $i++;
}?>
                                            <tr>
                                                <td><h4>Total</h4></td>
                                                <td><?php echo "$".$price; ?></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--   Core JS Files   -->
                    <script src="../assets/js/core/jquery.min.js"></script>
                    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
                    <!-- Control Center for Now Ui Dashboard-->
                    <script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>

</body>

</html>