<div class="row  ">
    <div class="profile_wrap text-center margin_top_wor ">
        <?php
        $skill= "select * from basic_info WHERE user_id = '$id'";

        if ($connect->query($skill)->num_rows > 0) {
        $skills = $connect->query($skill);
        $row = $skills->fetch_assoc();

        $_SESSION['about'] = $row['about'];


        ?>
        <div class="photo_wrap">
            <img src="../profile/<?php echo  $row['image']?>" class="round_img ">

        </div>
        <div class="wrap_text">
            <h3 class="name_my h_styling"><?php echo $row['fullname']; ?></h3>
            <p class="p_designation h_styling"><?php echo $row['work'];?></p>

        </div>

    </div>
</div>
<div class="row  margin_row" >
    <div class="row">
        <div class="col-md-3 col-sm-4 "><i class="fa fa-comment fa-2x  round_radius white_border "style="color: white" aria-hidden="true" ></i>
        </div>
        <div class="col-md-8 col-sm-8  white_category offset-md-1 little_margin_top" >PROFILE</div>

    </div>

    <div class="profile_text p_styling">
        <?php echo $row['about']; ?>


    </div>
    <?php } ?>


</div>