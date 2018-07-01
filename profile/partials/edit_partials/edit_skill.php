<?php

if (isset($_GET['idd'])){
    $id = $_GET['idd'];


    $sql_d = "delete from skill WHERE id = '$id'";

    if($connect->query($sql_d)){
        echo 'deleted';
    }
}



?>

<!--skill update -->


<?php
        if (isset($_POST['skill'])){
            $name_skill = trim($_POST['nskill']);
            $range = trim($_POST['range']);

            $id = $_SESSION['id'];

            $skill_update = "update skill set skill_name = '$name_skill',range_skill='$range' WHERE id = '$id'";

            if($connect->query($skill_update)){
                echo "succcess";
            }
        }


?>


<table class="table ">

    <thead>
    <tr>
        <th>Skill Name</th>
        <th>Skill Range</th>


        <th></th>
        <th></th>

    </tr>
    </thead>

    <tbody>
    <!--    -->

    <?php

    $user_id = $_SESSION['user_id'];

    $sql = "select * from skill where user_id = '$user_id'";

    if($connect->query($sql)){
        $ans = $connect->query($sql);


        while ($ans_1 = $ans->fetch_assoc()){



            ?>


            <tr>

                <td><?php echo $ans_1['skill_name']; ?></td>
                <td><?php echo $ans_1['range_skill']; ?></td>

                <td><a  href="skill_edit.php?id=<?php echo $ans_1['id'];?>" class="btn btn-primary">Edit</a></td>

                <td><a  href="skill_edit.php?idd=<?php echo $ans_1['id'];?>" class="btn btn-primary">Delete</a></td>

            </tr>
            <?php
        }
    }


    ?>


    </tbody>

</table>
<?php

    if(isset($_GET['id'])){
    $id = $_GET['id'];
    $_SESSION['id'] = $id;


        $get_skill  = "select * from skill WHERE id = '$id'";

        $get_skill_1 = $connect->query($get_skill);
        $get_skill_2 = $get_skill_1->fetch_assoc();




?>


    <div class="row">

        <div class="well text-center ">
            <h1 >SKILLS</h1>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <p>Insert Your Skill Set</p>

                    </div>
                    <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" oninput="x.value=parseInt(a.value)">
                        <div class="panel-body">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nskill" value="<?php echo $get_skill_2['skill_name']?>" required>

                            </div>
                            <div class="form-group">
                                <output name="x" for="a">Range Your Skill</output>
                                <input type="range" class="form-control" id="a" name="range" min="0" max="100" value="<?php echo $get_skill_2['range_skill']?>" required>

                            </div>


                        </div>

                        <div class="panel-footer">
                            <input type="submit" name="skill" value="Submit Skill" class="form-control btn btn-block btn-primary">

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>


<?php } ?>