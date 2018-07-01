


<div class="skill_row experience_awards_wrap">
    <h1>SKILLS</h1>
    <?php

    $skill= "select * from skill WHERE user_id = '$id' limit 5";

    if ($connect->query($skill)->num_rows > 0) {
        $skills = $connect->query($skill);
       while ( $row = $skills->fetch_assoc()){






        ?>

        <div class="row col-md-12 progress_spacing">

            <div class="col-md-3 progress_color"><?php echo strtoupper($row['skill_name']);?></div>
            <div class="col-md-9">
                <div class="progress progress_height">
                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: <?php echo $row['range_skill'];?>%"
                         aria-valuenow="<?php echo $row['range_skill'];?>" aria-valuemin="0" aria-valuemax="100" ></div>
                </div>
            </div>

        </div>

        <?php
       }
    }

    ?>






</div>