<div class="margin_row">
    <!--work ex-->
    <div class="work_ex_title margin_top_wor">

        <div class="row">
            <div class="col-md-2">
                <i class="fa fa-briefcase fa-2x round_radius black_border" aria-hidden="true"></i>


            </div>
            <div class="col-md-8 blue_category">
                <h2>WORK EXPERIENCE</h2>

            </div>


        </div>
        <!--main work-->
        <div class="contact_margin_left margin_top_wor">



            <div class="row">
                <div class="col-md-1  text-center">
                    <i class="fa fa-circle-o fa-2x circle_color" aria-hidden="true"></i>


                </div>
                <?php

                $skill= "select * from work_experience WHERE user_id = '$id' limit 5";

                if ($connect->query($skill)->num_rows > 0) {
                $skills = $connect->query($skill);
                while ($row = $skills->fetch_assoc()) {


                ?>
                <div class="col-md-11">
                    <ul>
                        <li><strong><?php echo $row['cname']?></strong></li>
                        <li><?php echo $row['position']?>(<?php
                            echo $row['duration'];

                            ?>)</li>

                        <li><?php echo $row['details'] ?></li>

                    </ul>

                </div>

                <?php }

                }
                ?>

            </div>



        </div>


    </div>
    <!--end work ex-->

</div>