<div class="col-md-3 col-lg-3 col-sm-3 col-xs-12 img_grid padding_top padding_bottom">


    <?php

    $skill= "select * from basic_info WHERE user_id = '$id'";

    if ($connect->query($skill)->num_rows > 0) {
        $skills = $connect->query($skill);
        $row = $skills->fetch_assoc();

        $_SESSION['about'] = $row['about'];


        ?>

        <div class="wrap text-center">
            <div class="photo_wrap">
                <img src="../profile/<?php echo  $row['image']?>" class="round_img img-thumbnail">

            </div>
            <div class="wrap_text">
                <h3 class="name_my"><?php echo $row['fullname']; ?></h3>
                <p class="p_designation"><?php echo $row['work'];?></p>

            </div>

        </div>
        <?php

    }

    ?>

</div>