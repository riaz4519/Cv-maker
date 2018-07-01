<?php
    if (isset($_GET['id'])){


        $id = $_GET['id'];
        global $id;


?>

<!--head_section-->
<?php
    include "partials/head_section.php";


?>


    <div class="main_div_wrapper">
        <div class="container">
            <div class="row ">

                <div class="col-md-10 col-sm-10 col-lg-10 col-xs-12 offset-md-1 offset-xs-0">


                    <div class="row " >
<!--profile pic-->
                        <?php

                        include "partials/profile_pic.php";

                        ?>


                        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12 contact_me_about padding_top padding_bottom">
                            <!--div contact me part-->
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 padding_left">
                                     <h2 class="contact_about_font">CONTACT ME</h2>
                                    <div class="contact_list contact_about_text">
                                        <div class="row padding_contact">
                                            <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1"><i class="fa fa-mobile fa-2x" aria-hidden="true"></i></div>
                                            <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9">+8801681562827</div>


                                        </div>
                                        <div class="row padding_contact">
                                            <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1"><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i></div>
                                            <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9">+Street Address Number</div>


                                        </div>
                                        <div class="row padding_contact">
                                            <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1"><i class="fa fa-envelope fa-1x" aria-hidden="true"></i></div>
                                            <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9">+Info@gmail.com</div>


                                        </div>
                                        <div class="row padding_contact">
                                            <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></div>
                                            <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9">+Www.facebook.com</div>


                                        </div>
                                        <div class="row padding_contact">
                                            <div class="col-md-1 col-lg-1 col-sm-1 col-xs-1"><i class="fa fa-paperclip fa-2x" aria-hidden="true"></i></div>
                                            <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9">www.helloworld.com</div>


                                        </div>



                                    </div>


                                </div>
<!--                               about me-->
                                <?php

                                include "partials/about.php";

                                ?>

                            </div>



                        </div>

                    </div>

                    <!--work ,education skill and-->


                    <div class="row">

                        <!--experience-->

                        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 experience_awards">
<!--expe-->
                            <?php
                            include "partials/experience.php";

                            ?>


                            <!--awards -->

                                        <?php

                                            include "partials/award.php";


                                        ?>
                            <!--awards end-->



                        </div>
                        <!--work and award column end-->

                        <!--education and skill-->

                        <div class="col-sm-6 col-md-6 col-lg-6 col-xs-12 education_skills">
                                <!--education row start-->
                                    <?php

                                    include "partials/education.php";

                                    ?>

                            <!--education row end-->
                                <?php

                                include "partials/skills.php";


                                ?>

                        </div>
                        </div>
                        <!--education and skill column end-->

                    </div>
                </div>
                <!--work education row end-->
            </div>

        </div>

    </div>




<?php

      include "partials/footer.php";
        ?>

<?php }

else{
    ?>
    <div class="container">
        <div class="jumbotron alert-danger">
            <h1>
                Page Loading Error!!!!
            </h1>

        </div>

    </div>
<?php
}

?>
<?php

    if (isset($_SESSION['user_id'])){
        ?>
        <a href="../profile" class="btn btn-primary">Back to profile</a>
<?php
    }

?>
