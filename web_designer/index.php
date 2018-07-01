<?php
if (isset($_GET['id'])){


    $id = $_GET['id'];
    global $id;


    ?>
<?php

include "partials/head_section.php";

?>
    <!--main_div wrapper start-->
    <div class="main_div_wrap">
        <!--main container start-->
        <div class="container">
            <!--main row start-->
            <div class="row">
                <!--main column start-->
                <div class="col-md-10 col-sm-10 col-lg-10 col-xs-10 offset-md-1 offset-sm-1 offset-lg-1 offset-xs-0">

                    <div class="row">

                        <!--left side main column-->
                        <div class="col-md-4  col-xs-12 main_left">
                            <!--profile start-->
                           <?php
                            include "partials/profile.php";

                           ?>
                            <!--profile end-->

                            <!--profile text start-->


                            <!--profile text end-->

                            <!--contact me start-->
                                <?php
                                    include "partials/contact.php";

                                ?>
                            <!--contact me end-->

                            <!--professional skill-->
                           <?php
                            include "partials/pro_skill.php";

                           ?>
                            <!--end prof-->

                            <!--start get in touch-->
                            <?php

                                include "partials/get_in_touch.php";

                            ?>

                            <!--end get in touch -->
                        </div>



                        <!--end of left side main column-->

                        <!--right side column-->
                        <div class="col-md-8 main_right" >
                            <!--start right column main div-->
                            <?php include "partials/work_ex.php"; ?>
                            <!--end right column main div-->

                            <!--education start-->
                            <?php include "partials/education.php";?>
                            <!--education ends-->



                            <!--awards and achievment-->

                            <?php include "partials/awards.php";?>

                            <!--end award-->



                        </div>
                        <!--right side column end-->


                    </div>

                </div>
                <!--main column end-->

            </div>
            <!--mian row end-->
        </div>
        <!--main_container end-->

    </div>

    <!--main_div wrapper end-->

<?php include "partials/footer.php";?>
<?php }?>
