<?php
include "partials/connection_top.php";

if(!isset($_SESSION['user_id'])){
    header('Location:../login_register/login/login.php');
}


?>
<html>


<head>
    <title>TITLE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>

<!--    custom css-->

    <link rel="stylesheet" href="style.css">

</head>

<body>
<div class="main_container">
<!--    navigation top-->
<?php

include "partials/top_nav.php";

?>

    <div class="container">
        <div class="row">
<!--            navigation left-->

            <?php
            include "partials/navigation_left.php";

            ?>

            <div class="col-md-10">

            </div>

        </div>

    </div>

</div>

<?php include "partials/footer.php"?>

</body>
</html>