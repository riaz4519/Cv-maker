<div class="awards_wrap row">
    <h1>AWARDS</h1>
    <?php

    $skill= "select * from award WHERE user_id = '$id' limit 5";

    if ($connect->query($skill)->num_rows > 0) {
        $skills = $connect->query($skill);
        while ($row = $skills->fetch_assoc()) {


            ?>

            <div class="row col-md-12" style="color: white">
                <div class="col-sm-3">
                    <?php echo $row['year']?>
                </div>
                <div class="col-sm-8">
                    <ul>
                        <li class=""> <?php echo $row['naward']?></li>
                        <li class=""><?php echo $row['ncomp']?></li>

                    </ul>

                </div>

            </div>

            <?php

        }

    }

    ?>





</div>