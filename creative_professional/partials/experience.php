<div class="experience_awards_wrap row">
    <h1> WORK EXPERIENCE</h1>
    <?php

    $skill= "select * from work_experience WHERE user_id = '$id' limit 5";

    if ($connect->query($skill)->num_rows > 0) {
        $skills = $connect->query($skill);
        while ($row = $skills->fetch_assoc()) {


            ?>

            <div class="row col-md-12" style="color: white">
                <div class="col-sm-4">
                    <?php
                    echo $row['duration'];

                    ?>

                </div>
                <div class="col-sm-8">
                    <ul>
                        <li class=""><?php echo $row['position']?></li>
                        <li class=""><?php echo $row['cname']?></li>
                        <li class=""> <?php echo $row['details'] ?></li>

                    </ul>

                </div>
            </div>
            <?php

        }
    }

    ?>



</div>