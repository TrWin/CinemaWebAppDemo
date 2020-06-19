<?php
include 'connect.php';
include 'session.php';
if (!isset($_SESSION['login_user'])) {
    header("location: movieEdit.php"); // Redirecting To Home Page
}
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
    <link rel="stylesheet" href="importfile/bootstrap.min.css" />
    <script src="importfile/jquery-3.4.1.min.js"></script>
    <script src="importfile/bootstrap.min.js"></script>
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


                    <li class="active ">
                        <a href="./movie.php">
                            <i class="now-ui-icons education_atom"></i>
                            <p>movie</p>
                        </a>
                    </li>
                    <li>
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
                        <a class="navbar-brand" href="#pablo">movie</a>
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
                                <h4 class="card-title"> Now showing </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <form action="insert.php" method="post" enctype="multipart/form-data">
                                        <table class="table">
                                            <thead class=" text-primary">
                                                <th>
                                                    Poster
                                                </th>
                                                <th>
                                                    Movie
                                                </th>
                                                <th>
                                                    Rate
                                                </th>
                                                <th>
                                                    Type
                                                </th>
                                                <th>
                                                    Time
                                                </th>
                                                <th>
                                                    Languange
                                                </th>
                                                <th>
                                                    System
                                                </th>
                                                <th>
                                                </th>
                                            </thead>
                                            <tbody>


                                                <tr>
                                                    <td>
                                                        <img src="" width="208"
                                                            height="300">
                                                        <br><br>
                                                        <input class="form-control" type="file" name="file" value="">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" name="movie"
                                                            value="">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" name="rate"
                                                            value="">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" name="type"
                                                            value="">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" name="time"
                                                            value="">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" name="language"
                                                            value="">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" type="text" name="systemmovie"
                                                            value="">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <button class="btn btn-primary" type="submit"
                                                            name="submit">Confirm</button>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </form>
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