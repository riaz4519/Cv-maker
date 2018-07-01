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

                <div class="col-md-8 col-md-offset-1">

<!--                    awards-->
                    <?php
                        include "partials/award_p.php";

                    ?>



                </div>

            </div>

        </div>

    </div>

<?php
//footer goes here

include "partials/footer.php";


?>
