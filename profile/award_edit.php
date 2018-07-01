<?php

include "partials/connection_top.php";
if(!isset($_SESSION['user_id'])){
    header('Location:../login_register/login.php');
}

?>
<?php
//head section
include "partials/head_section.php";

?>

    <div class="main_container">

      <?php
        include "partials/top_nav.php"

      ?>


        <div class="container">


            <div class="row">

<!--                navigation goes here-->
                <?php

                    include "partials/navigation_left.php";


                ?>

                <div class="col-md-7 ">


<!--         award     -->

                    <?php

                    include "partials/edit_partials/edit_award.php"


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
//footer goes here

include "partials/footer.php";


?>
