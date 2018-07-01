<div class="row education_wrap experience_awards_wrap">
    <h1>EDUCATION</h1>
    <?php

    $skill= "select * from education WHERE user_id = '$id' limit 4";

    if ($connect->query($skill)->num_rows > 0) {
        $skills = $connect->query($skill);
        while ($row = $skills->fetch_assoc()) {


            ?>

            <div class="col-md-12" style="color: white">
                <div class="row">
                <div class="col-sm-3">
                    <?php echo $row['year']?>

                </div>
                <div class="col-sm-9 ">
                    <ul>
                        <li class=""><?php echo $row['category']?></li>
                        <li class=""><?php echo $row['iname']?></li>


                    </ul>

                </div>
                </div>

            </div>

            <?php

        }
    }
    ?>


</div>