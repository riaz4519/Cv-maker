

<?php
session_start();
include "../connect/connect.php";

if(isset($_SESSION['user_id'])){
    header('Location:../profile');
}




if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query = "select id from users WHERE email = '$email' and password = '$pass'";

    if($connect->query($query)->num_rows){
        $result = $connect->query($query);
        $result1 = $result->fetch_object();
        $_SESSION['login'] = true;
        $_SESSION['user_id'] = $result1->id;
        if($_SESSION['login']){
            header('Location:../profile/');
        }
    }
    else{
        $error_code = 3;
    }


}


?>


<!DOCTYPE html>
<html>
<head>
    <title>Facebook</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleform.css">
    <style>
    .navbar-inverse{
        border-radius: 0px;
        height: 35px;
    }
</style>

</head>
<body>
<div class="main_container">

<!-- top nav-->

    <div class="nav_container " >
        <nav class="navbar navbar-inverse">
            <div class="container">
                <a class="navbar-brand" href="index.html">QuickCv.com</a>
                <div class="nav navbar-nav navbar-text">
                    <p>Create,maintain,publish,and share your CVs for free</p>

                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php" >Login</a></li>
                    <li><a href="register.php" >Signup</a></li>
                </ul>
            </div>

        </nav>
    </div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4  col-md-offset-4 background" >
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div class="row">
                <div class="col-md-12 text-center">
                <h1 class="white">Login</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3  class="white">Please Login</h3>
                </div>
            </div>
            <hr width="50%">

            <div class="row">
                <div class="form-group input-md col-sm-12">
                    <input class="form-control input-lg" name="email" type="email" placeholder="Enter Your Email" required>
                </div>

            </div>
            <div class="row">
                <div class="form-group col-sm-12">
                    <input class="form-control input-lg" name="password" type="password" placeholder="Enter your password" required>
                </div>

            </div>

            <hr width="50%">
            <div class="row">
                <div class="form-group col-sm-12">
                    <input class="form-control input-lg btn btn-block btn-success btn-lg" name="submit" type="submit" value="Login">
                </div>

            </div>
            </form>

        </div>



    </div>
</div>

</div>
</body>
</html>