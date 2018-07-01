<div class="margin_row">
    <!--education ex-->
    <div class="education margin_top_wor">

        <div class="row">
            <div class="col-md-2">
                <i class="fa fa-book fa-2x round_radius black_border" aria-hidden="true"></i>


            </div>
            <div class="col-md-8 blue_category">
                <h2>EDUCATION</h2>

            </div>


        </div>
        <!--main work-->
        <div class="contact_margin_left margin_top_wor">

            <?php

            $skill= "select * from education WHERE user_id = '$id' limit 4";

            if ($connect->query($skill)->num_rows > 0) {
            $skills = $connect->query($skill);
            while ($row = $skills->fetch_assoc()) {


                ?>

                <div class="row">
                    <div class="col-md-1  text-center">
                        <i class="fa fa-circle-o fa-2x circle_color" aria-hidden="true"></i>


                    </div>
                    <div class="col-md-11">
                        <ul>
                            <li><strong><?php echo $row['iname']?></strong></li>
                            <li><?php echo $row['category']?>(<?php echo $row['year']?>)</li>



                        </ul>

                    </div>

                </div>

                <?php

            }

            }

            ?>



        </div>

    <!--end education ex-->

</div>