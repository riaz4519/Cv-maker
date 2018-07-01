<div class="pro_skill_bar">
    <div class="row margin_row ">
        <div class="row margin_top_wor">
            <div class="col-md-3 col-sm-3 "><i class="fa fa-user fa-2x  contact_radius white_border "style="color: white" aria-hidden="true" ></i></div>
            <div class="col-md-9 col-sm-9  white_category  little_margin_top" style="letter-spacing: -1px; word-spacing: 1px;">PROFESSIONAL SKILLS</div>


        </div>

    </div>
    <div class="align_progress" style="margin-left: 70px;">
        <?php

        $skill= "select * from skill WHERE user_id = '$id' limit 5";

        if ($connect->query($skill)->num_rows > 0) {
        $skills = $connect->query($skill);
        while ( $row = $skills->fetch_assoc()){






        ?>

        <div class="">
            <p><?php echo strtoupper($row['skill_name']);?></p>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: <?php echo $row['range_skill'];?>%" aria-valuenow="<?php echo $row['range_skill'];?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <?php }


        }?>

    </div>
</div>