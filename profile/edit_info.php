<?php
include "partials/connection_top.php";
if(!isset($_SESSION['user_id'])){
    header('Location:../login_register/login.php');
}


?>


<html>

<?php
    include "partials/head_section.php";

?>
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

            <div class="col-md-7">


            <?php

            include "partials/edit_partials/basic_info.php";

            ?>
            </div>
            <div class="col-md-2">
                <?php

                include "partials/edit_partials/nav_right.php";

                ?>

            </div>

        </div>

    </div>

</div>

<?php
include "partials/footer.php";

?>



</body>
</html>