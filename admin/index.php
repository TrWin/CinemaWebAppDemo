<?php
include 'login.php'; // Includes Login Script
if (isset($_SESSION['login_user'])) {
    header("location: customer.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>SWU Cinema | admin</title>
    <link rel="stylesheet" href="importfile/bootstrap.min.css" />
    <script src="importfile/jquery-3.4.1.min.js"></script>
    <script src="importfile/bootstrap.min.js"></script>
    <link href="importfile/style1.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="blurred-box">
        <div class="row align-items-md-center">

            <div class="user-login-box">
                <div class="panel-heading">
                    <h1>Admin Login</h1>
                </div>
                <div class="panel-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Enter id" name="username" />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Enter password" name="password" />
                        </div>
                        <button name="submit" type="submit" class="btn btn-success">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>