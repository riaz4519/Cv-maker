<?php
include "partials/connection_top.php";

if(!isset($_SESSION['user_id'])){
    header('Location:../login_register/login/login.php');
}


?>
<?php

if(isset($_GET['cv_name'])){

    $user_id = $_SESSION['user_id'];
    $cv_name = $_GET['cv_name'];

    $sql_check= "select id from selected_cv WHERE user_id='$user_id'";
    if($connect->query($sql_check)->num_rows>0){
        $sql_update = "update selected_cv set cv_name = '$cv_name' WHERE user_id='$user_id'";
        if($connect->query($sql_update)){
            echo "done";
        }
    }
    else{
        $sql_insert = "insert into selected_cv(user_id,cv_name)VALUES ('$user_id','$cv_name')";
        if($connect->query($sql_insert)){
            echo "done";
        }

    }
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

                <div class="row">
                    <div class="col-md-3">
                        <img src="img/creative_professional.png" class="img-thumbnail">
                        <a href="select_cv.php?cv_name=creative_professional" class="btn btn-primary btn-block">Creative Professional</a>

                    </div>
                    <div class="col-md-3">
                        <img src="img/graphic_designer.jpg" class="img-thumbnail">
                        <a href="select_cv.php?cv_name=web_designer" class="btn btn-primary btn-block">Web Designer</a>

                    </div>

                </div>


            </div>

        </div>

    </div>

</div>


<?php include "partials/footer.php"?>
</body>
</html>