<div class="margin_row">
    <!--award ex-->
    <div class="awards_achi margin_top_wor">

        <div class="row">
            <div class="col-md-2">
                <i class="fa fa-trophy fa-2x round_radius black_border" aria-hidden="true"></i>


            </div>
            <div class="col-md-8 blue_category">
                <h2>AWARDS & ACHIEVMENTS</h2>

            </div>


        </div>
        <!--main work-->
        <div class="contact_margin_left margin_top_wor">



            <div class="row">
                <div class="col-md-1  text-center">
                    <i class="fa fa-circle-o fa-2x circle_color" aria-hidden="true"></i>


                </div>
                <div class="col-md-11">
                    <ul>
                        <li><strong>IT GROUP</strong></li>
                        <li>Lead Web Designer(2013-current)</li>

                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>

                    </ul>

                </div>

            </div>



        </div>
        <div class="contact_margin_left margin_top_wor">

            <?php

            $skill= "select * from award WHERE user_id = '$id' limit 5";

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
                            <li><strong><?php echo $row['naward']?></strong>(<?php echo $row['year']?>)</li>
                            <li><?php echo $row['ncomp']?></li>

                            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>

                        </ul>

                    </div>

                </div>
                <?php
            }

            }

            ?>



        </div>

    </div>
    <!--end awards ex-->

</div>