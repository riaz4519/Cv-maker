<?php

if (isset($_GET['idd'])){
    $id = $_GET['idd'];


    $sql_d = "delete from work_experience WHERE id = '$id'";

    if($connect->query($sql_d)){
        echo 'deleted';
    }
}



?>

<?php

    if (isset($_POST['work_ex'])){
        $cname = trim($_POST['cname']);
        $position = trim($_POST['position']);
        $duration = trim($_POST['duration']);

        $id = $_SESSION['id'];

        $sql_update = "update work_experience set cname = '$cname',position = '$position',duration = '$duration' WHERE id = '$id'";

        if($connect->query($sql_update)){
            echo "success";
        }
    }

?>
<table class="table ">

    <thead>
    <tr>
        <th>Company name</th>
        <th>position</th>
        <th>duration</th>

        <th></th>
        <th></th>

    </tr>
    </thead>

    <tbody>
    <!--    -->

    <?php

    $user_id = $_SESSION['user_id'];

    $sql = "select * from work_experience where user_id = '$user_id'";

    if($connect->query($sql)){
        $ans = $connect->query($sql);
        ;

        while ($ans_1 = $ans->fetch_assoc()){



            ?>


            <tr>

                <td><?php echo $ans_1['cname']; ?></td>
                <td><?php echo $ans_1['position']; ?></td>
                <td><?php echo $ans_1['duration']; ?></td>
                <td><a  href="work_edit.php?id=<?php echo $ans_1['id'];?>" class="btn btn-primary">Edit</a></td>

                <td><a  href="work_edit.php?idd=<?php echo $ans_1['id'];?>" class="btn btn-primary">Delete</a></td>

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


            $get_work  = "select * from work_experience WHERE id = '$id'";

            $get_work_1 = $connect->query($get_work);
            $get_work_2 = $get_work_1->fetch_assoc();
        ?>


        <div class="row">
            <div class="text-center">
                <h2> Work Experience</h2>

            </div>
            <div class="col-md-12">
                <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">

                    <div class="form-group">
                        <input type="text" name="cname" value="<?php echo $get_work_2['cname']; ?>" class="form-control" required>


                    </div>
                    <div class="form-group">
                        <input type="text" name="position" value="<?php echo $get_work_2['position']; ?>" class="form-control" required>


                    </div>
                    <div class="form-group">
                        <input type="text" name="duration" value="<?php echo $get_work_2['duration']; ?>" class="form-control" required>


                    </div>

                    <input type="submit" name="work_ex" value="submit work" class="form-control btn btn-primary btn-block">
                </form>


            </div>

        </div>
<?php
    }

?>