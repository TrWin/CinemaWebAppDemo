<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Title Page-->
    <title>Register</title>
    <link rel="stylesheet" href="importfile/bootstrap.min.css" />
    <script src="importfile/jquery-3.4.1.min.js"></script>
    <script src="importfile/bootstrap.min.js"></script>

</head>

<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>Register Form</h1>
            <form action="insert.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control" type="text" name="username" placeholder="username" required>
                </div>
                <div class="form-group">
                    <label>password</label>
                    <input class="form-control" type="password" name="password" placeholder="password" required>
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input class="form-control" type="email" name="email" placeholder="ex. email@email.com" required>
                </div>
                <div>
                    <label>ชื่อ-นามสกุล</label>
                    <div class="row">
                        <div class="col">
                            <input  name ="firstName" type="text" class="form-control" placeholder="First name" required>
                        </div>
                        <div class="col">
                            <input name="lastName" type="text" class="form-control" placeholder="Last name" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>เลขบัตรประจำตัวประชาชน</label>
                    <input class="form-control" type="number" name="id" placeholder="" required>
                </div>
                <div class="form-group">
                    <label>วันเดือนปีเกิด</label>
                    <input class="form-control" type="date" name="birth" placeholder="ex.1998-01-30" required>
                </div>
                <div class="form-group">
                    <label>เบอร์โทรศัพท์</label>
                    <input class="form-control" type="text" name="telephone" placeholder="ex.094xxxxxxx" required>
                </div>


                <input type="submit" name="submit" id="submit" value="register" class="btn btn-success">

            </form>


        </div>
    </div>

</body>

</html>